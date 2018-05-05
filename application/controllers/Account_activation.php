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
        if ($this->input->post()) {
            $data = $this->input->post();
            $id = $this->session->userdata('user_id');
            $this->user_model->update('users',$data,array('id'=>$id));
            redirect('home');
        }
        $this->data['user'] = $this->get_user_detail();
    	$this->load->front_template('account/activation',$this->data);
    }

    public function image_upload()
    {
        $data                    = array();
        $data['user_id']         = $this->session->userdata('user_id');
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|jpg|jpeg|gif|pdf';
        $config['max_size']      = 10000;
        $config['max_width']     = 5024;
        $config['max_height']    = 4768;
        
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $data['file'] = '/uploads/' . $this->upload->data('file_name');
        }
        $this->user_model->insert('user_document', $data);
        $data = array();
        $data = $this->user_model->get_rows('user_document',array('user_id'=>$this->session->userdata('user_id')));
        echo json_encode($data);
    }

    public function remove_file($id)
    {
        $this->user_model->delete('user_document',array('id'=>$id));
    }

}