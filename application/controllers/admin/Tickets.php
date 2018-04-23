<?php
		    class Tickets extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Tickets_model');
	        $this->module = 'tickets';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Tickets';
			if ( $this->permission['view_all'] == '1'){$this->data['tickets'] = $this->Tickets_model->all_rows('tickets');}
			elseif ($this->permission['view'] == '1') {$this->data['tickets'] = $this->Tickets_modelget_rows('tickets',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/tickets/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Tickets';$this->load->template('admin/tickets/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$config['upload_path']          = './uploads/';
					                $config['allowed_types']        = 'png|jpeg|jpg|gif|pdf|doc|docx|xlx|xlxs|txt|csv';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('FIle'))
					                {
					                        $data['FIle'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Tickets_model->insert('tickets',$data);
			if ($id) {
				redirect('admin/tickets');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Tickets';
			$this->data['tickets'] = $this->Tickets_model->get_row_single('tickets',array('id'=>$id));$this->load->template('admin/tickets/edit',$this->data);
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
					                $config['allowed_types']        = 'png|jpeg|jpg|gif|pdf|doc|docx|xlx|xlxs|txt|csv';
					                $config['max_size']             = 1000;
					                $config['max_width']            = 1024;
					                $config['max_height']           = 768;

					                $this->load->library('upload', $config);

					                if ( $this->upload->do_upload('FIle'))
					                {
					                        $data['FIle'] = '/uploads/'.$this->upload->data('file_name');
					                }
					                $id = $this->Tickets_model->update('tickets',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/tickets');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Tickets_model->delete('tickets',array('id'=>$id));
			redirect('admin/tickets');
		}}