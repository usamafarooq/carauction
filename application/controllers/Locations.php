<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('locations_model');
    }

	public function index()
	{
		$this->data['locations'] = $this->locations_model->all_rows('locations');
		$this->load->front_template('auction/locations',$this->data);
	}

}