<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_activation extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('user_model');
    }

    public function index()
    {
    	$this->load->front_template('account/activation',$this->data);
    }

}