<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
		$this->load->front_template('my_account/index',$this->data);
	}

}