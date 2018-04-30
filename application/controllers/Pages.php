<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('pages_model');
    }

	public function page($url)
	{
		$this->data['page'] = $this->pages_model->get_row_single('pages',array('Url' => $url));
		$this->load->front_template('page',$this->data);
	}

}