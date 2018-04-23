<?php
		    class Language extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Language_model');
	        $this->module = 'language';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Language';
			if ( $this->permission['view_all'] == '1'){$this->data['language'] = $this->Language_model->all_rows('language');}
			elseif ($this->permission['view'] == '1') {$this->data['language'] = $this->Language_model->get_rows('language',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/language/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Language';$this->load->template('admin/language/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'jpg|jpeg|png|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Icon'))
					                {
					                        $data['Icon'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Language_model->insert('language',$data);
			if ($id) {
				redirect('admin/language');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Language';
			$this->data['language'] = $this->Language_model->get_row_single('language',array('id'=>$id));$this->load->template('admin/language/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'jpg|jpeg|png|gif';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('Icon'))
					                {
					                        $data['Icon'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Language_model->update('language',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/language');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Language_model->delete('language',array('id'=>$id));
			redirect('admin/language');
		}}