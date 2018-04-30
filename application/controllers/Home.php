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
		$this->load->front_template('home',$this->data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
}
