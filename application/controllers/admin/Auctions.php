<?php
		    class Auctions extends MY_Controller{

		    	public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Auctions_model');
	        $this->module = 'auctions';
	        $this->user_type = $this->session->userdata('user_type');
	        $this->id = $this->session->userdata('user_id');
	        $this->permission = $this->get_permission($this->module,$this->user_type);
	    }public function index()
		{
			if ( $this->permission['view'] == '0' && $this->permission['view_all'] == '0' ) 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Auctions';
			if ( $this->permission['view_all'] == '1'){$this->data['auctions'] = $this->Auctions_model->get_auctions();}
			elseif ($this->permission['view'] == '1') {$this->data['auctions'] = $this->Auctions_model->get_auctions($this->id);}
			$this->data['permission'] = $this->permission;
			$this->load->template('admin/auctions/index',$this->data);
		}public function create()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Create Auctions';$this->data['table_locations'] = $this->Auctions_model->all_rows('locations');$this->load->template('admin/auctions/create',$this->data);
		}
		public function insert()
		{
			if ( $this->permission['created'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$data['Date'] = date('Y-m-d H:i:s', strtotime($data['Date']));
			$data['user_id'] = $this->session->userdata('user_id');$id = $this->Auctions_model->insert('auctions',$data);
			if ($id) {
				redirect('admin/auctions');
			}
		}public function edit($id)
		{
			if ($this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$this->data['title'] = 'Edit Auctions';
			$this->data['auctions'] = $this->Auctions_model->get_row_single('auctions',array('id'=>$id));$this->data['table_locations'] = $this->Auctions_model->all_rows('locations');$this->load->template('admin/auctions/edit',$this->data);
		}

		public function update()
		{
			if ( $this->permission['edit'] == '0') 
			{
				redirect('admin/home');
			}
			$data = $this->input->post();
			$id = $data['id'];
			//echo $data['Date'];echo '<br>';
			$data['Date'] = date('Y-m-d H:i:s', strtotime($data['Date']));
			//echo $data['Date'];die;
			unset($data['id']);$id = $this->Auctions_model->update('auctions',$data,array('id'=>$id));
			if ($id) {
				redirect('admin/auctions');
			}
		}public function delete($id)
		{
			if ( $this->permission['deleted'] == '0') 
			{
				redirect('admin/home');
			}
			$this->Auctions_model->delete('auctions',array('id'=>$id));
			redirect('admin/auctions');
		}}