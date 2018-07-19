<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('reviews_model');
    }

	public function index()
	{
		$this->load->front_template('reviews',$this->data);
	}
}