<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('google');
        $this->load->library('facebook');
        $this->is_login();
        $this->load->model('login_model');
    }

	public function index()
	{
		
		$this->data['googleURL'] = $this->google->loginURL();
		$this->data['facebookURL'] =  $this->facebook->login_url();
		$this->load->front_template('user/login',$this->data);
	}

	public function is_login()
	{
		if ($this->session->userdata('user_id')) {
			redirect("my_account");
		}
	}

	public function check_login()
	{
		$data = $this->input->post();
		$user = $this->login_model->get_row_single('users',array('email'=>$data['email'],'password'=>md5($data['password'])));
		if (!empty($user)) {
			$this->session->set_userdata('user_id', $user['id']);
			$this->session->set_userdata('user_type', $user['role']);
			$set = 0;
			foreach ($user as $key => $value) {
				if (empty($value)) {
					redirect("account_activation");
				}
			}
			redirect("my_account");
		}
		else{
			$this->session->set_flashdata('error', 'Email and Password do not match');
			redirect("login");
		}
	}

	public function google()
	{
		if(isset($_GET['code'])){
            //authenticate user
            $this->google->getAuthenticate();
            
            //get user info from google
            $gpInfo = $this->google->getUserInfo();
            $data = array(
            	'email' => $gpInfo['email'],
            	'username' => $gpInfo['email'],
            	'first_name' => $gpInfo['given_name'],
            	'last_name' => $gpInfo['family_name'],
            	'password' => md5($gpInfo['email']),
            );
            $email = $this->login_model->get_row_single('users',array('email'=>$data['email']));
			if (!empty($email)) {
				$this->session->set_userdata('user_id', $email['id']);
				$this->session->set_userdata('user_type', 2);
				foreach ($email as $key => $value) {
					if (empty($value)) {
						redirect("account_activation");
					}
				}
				redirect("my_account");
			}
			else{
				$id = $this->login_model->insert('users',$data);
				if ($id) {
					$this->login_model->insert('user_package',array('user_id'=>$id,'package_id'=>1));
					$this->session->set_userdata('user_id', $id);
					$this->session->set_userdata('user_type', 2);
					redirect("packages");
				}
			}
        } 
	}

	public function facebook()
	{
		if($this->facebook->is_authenticated()){
            // Get user facebook profile details
            $fbUserProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,locale,cover,picture');


            $data = array(
            	'email' => $fbUserProfile['email'],
            	'username' => $fbUserProfile['email'],
            	'first_name' => $fbUserProfile['first_name'],
            	'last_name' => $fbUserProfile['last_name'],
            	'password' => md5($fbUserProfile['email']),
            );
            $email = $this->login_model->get_row_single('users',array('email'=>$data['email']));
			if (!empty($email)) {
				$this->session->set_userdata('user_id', $email['id']);
				$this->session->set_userdata('user_type', 2);
				foreach ($email as $key => $value) {
					if (empty($value)) {
						redirect("account_activation");
					}
				}
				redirect("my_account");
			}
			else{
				$id = $this->login_model->insert('users',$data);
				if ($id) {
					$this->login_model->insert('user_package',array('user_id'=>$id,'package_id'=>1));
					$this->session->set_userdata('user_id', $id);
					$this->session->set_userdata('user_type', 2);
					redirect("packages");
				}
			}

            // $userData['oauth_provider'] = 'facebook';
            // $userData['oauth_uid'] = $fbUserProfile['id'];
            // $userData['first_name'] = $fbUserProfile['first_name'];
            // $userData['last_name'] = $fbUserProfile['last_name'];
            // $userData['email'] = $fbUserProfile['email'];
            // $userData['gender'] = $fbUserProfile['gender'];
            // $userData['locale'] = $fbUserProfile['locale'];
            // $userData['cover'] = $fbUserProfile['cover']['source'];
            // $userData['picture'] = $fbUserProfile['picture']['data']['url'];
            // $userData['link'] = $fbUserProfile['link'];
            
            // $userID = $this->user->checkUser($userData);
            
            // if(!empty($userID)){
            //     $data['userData'] = $userData;
            //     $this->session->set_userdata('userData',$userData);
            // }else{
            //    $data['userData'] = array();
            // }
            
            // $data['logoutURL'] = $this->facebook->logout_url();
        }
	}

}
