<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('packages_model');
    }

    public function index()
    {
    	$this->data['current_package'] = $this->package();
    	$this->data['packages'] = $this->packages_model->all_rows('packages');
    	$this->load->front_template('packages/list',$this->data);
    }

    public function select($id)
    {
    	$user_id = $this->session->userdata('user_id');
    	$id = $this->packages_model->insert('user_package',array('user_id'=>$user_id,'package_id'=>$id));
    	if ($id) {
    		redirect('account_activation');
    	}
    }

}