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
		$this->data['vehicle_type'] = $this->home_model->all_rows('vehicle_type');
		$this->load->front_template('home',$this->data);
	}
}
