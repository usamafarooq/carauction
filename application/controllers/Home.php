<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_Controller {

	public function index()
	{
		$this->load->front_template('home');
	}
}
