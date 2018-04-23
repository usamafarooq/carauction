<?php
		    class Currency extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Currency_model');
	        $this->module = 'currency';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Currency';
			if ( $this->permission['view_all'] == '1'){$this->data['currency'] = $this->Currency_model->all_rows('currency');}
			elseif ($this->permission['view'] == '1') {$this->data['currency'] = $this->Currency_modelget_rows('currency',array('user_id'=>$this->id));}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/currency/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Currency';$this->load->template('admin/currency/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Currency_model->insert('currency',$data);
			if ($id) {
				redirect('admin/currency');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Currency';
			$this->data['currency'] = $this->Currency_model->get_row_single('currency',array('id'=>$id));$this->load->template('admin/currency/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			unset($data['id']);$id = $this->Currency_model->update('currency',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/currency');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Currency_model->delete('currency',array('id'=>$id));
			redirect('admin/currency');
		}}