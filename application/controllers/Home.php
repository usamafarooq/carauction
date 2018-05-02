<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
		$this->data['home'] = 1;
		$this->data['popular_listing'] = $this->home_model->get_popular_listing();
		$this->data['live_listing'] = $this->home_model->get_live_listing();
		$this->data['makes']  = $this->home_model->all_rows('makes');
		$this->data['locations']  = $this->home_model->all_rows('locations');
		$this->load->front_template('home',$this->data);
	}

	public function subscribe()
	{
		$email = $this->input->post('email');
		$newslatter = $this->home_model->get_row_single('subscriptions',array('Email'=>$email));
		if (empty($newslatter)) {
			$id = $this->home_model->insert('subscriptions',array('email'=>$email));
			if ($id) {
				echo json_encode(array('status'=>true, 'message' => 'Successfully Subscribe'));
			}
			else{
				echo json_encode(array('status'=>false, 'message' => 'Error in Subscribtion'));
			}
		}
		else{
			echo json_encode(array('status'=>false, 'message' => 'Your Email Already Subscribe'));
		}
	}

	public function get_by_make_id()
	{
		$id = $this->input->post('make_id');
		$data = $this->home_model->get_rows('models',array('Make'=>$id));
		echo json_encode(['status' => 'success', 'data' => $data]);

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
}
