<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->is_login();
        $this->load->model('login_model');
    }

	public function index()
	{
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

}
