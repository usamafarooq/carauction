<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_auctions extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
		$this->load->front_template('auction/live',$this->data);
	}

}