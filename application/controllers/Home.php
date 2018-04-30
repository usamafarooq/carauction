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
		//print_r($this->db->last_query());die;
		$this->load->front_template('home',$this->data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("login");
	}
}
