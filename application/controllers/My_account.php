<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->is_login();
        $this->load->model('account_model');
    }

    public function is_login()
	{
		if (!$this->session->userdata('user_id')) {
			redirect("login");
		}
	}

	public function index()
	{
		$this->load->front_template('my_account/index',$this->data);
	}
	public function watchlist()
	{
		$order = array('sort' => 'auctions.Date', 'type' => 'ASC');
		if ($this->input->get('sort')) {
			$order = array('sort' => $this->input->get('sort'), 'type' => $this->input->get('type'));
		}
		$this->data['sort'] = $order['sort'];
		$this->data['type'] = $order['type'];
		$this->data['watchlist'] = $this->account_model->get_watchlist($this->session->userdata('user_id'),$order);
		$this->load->front_template('my_account/watchlist',$this->data);
	}
	public function saved_search()
	{
		$this->load->front_template('my_account/saved_search',$this->data);
	}
	public function opentickets()
	{
		$this->data['tickets'] = $this->account_model->get_tickets($this->session->userdata('user_id'),1);
		$this->load->front_template('my_account/opentickets',$this->data);
	}
	public function closetickets()
	{
		$this->data['tickets'] = $this->account_model->get_tickets($this->session->userdata('user_id'),2);
		$this->load->front_template('my_account/closetickets',$this->data);
	}

	public function single_ticket($id)
	{
		if ($this->input->post()) {
			$data = array(
				'ticket_id' => $id,
				'user_id' => $this->session->userdata('user_id'),
				'message' => $this->input->post('message')
			);
			$this->account_model->insert('ticket_thread',$data);
			redirect('my_account/single_ticket/'.$id);
		}
		$this->data['ticket'] = $this->account_model->get_row_single('tickets',array('id'=>$id));
		$this->data['thread'] = $this->account_model->get_thraed($id);
		$this->load->front_template('my_account/single_ticket',$this->data);
	}
	public function createtickets()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			$data['user_id'] = $this->session->userdata('user_id');
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'png|jpeg|jpg|gif|pdf|doc|docx|xlx|xlxs|txt|csv';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( $this->upload->do_upload('FIle'))
            {
                $data['FIle'] = '/uploads/'.$this->upload->data('file_name');
            }
            $id = $this->account_model->insert('tickets',$data);
			if ($id) {
				$data = array(
					'ticket_id' => $id,
					'user_id' => $data['user_id'],
					'message' => $data['Message']
				);
				$this->account_model->insert('ticket_thread',$data);
				redirect('my_account/opentickets');
			}
		}
		$this->load->front_template('my_account/createtickets',$this->data);
	}
	public function currentbid()
	{
		$this->load->front_template('my_account/currentbid',$this->data);
	}
	public function wonbid()
	{
		$this->load->front_template('my_account/wonbid',$this->data);
	}
	public function lostbid()
	{
		$this->load->front_template('my_account/lostbid',$this->data);
	}
	public function transaction()
	{
		$this->load->front_template('my_account/transaction',$this->data);
	}
 	public function deposit()
	{
		$this->load->front_template('my_account/deposit',$this->data);
	}

	public function refund()
	{
		$this->load->front_template('my_account/refund',$this->data);
	}
	public function waitingforesign()
	{
		$this->load->front_template('my_account/waitingforsign',$this->data);
	}
	public function processing()
	{
		$this->load->front_template('my_account/processing',$this->data);
	}
	public function completed()
	{
		$this->load->front_template('my_account/completed',$this->data);
	}
	public function inProccess()
	{
		$this->load->front_template('my_account/inproccess',$this->data);
	}
	public function shippingcompleted()
	{
		$this->load->front_template('my_account/shippingcompleted',$this->data);
	}
	public function shippingcustom()
	{
		$this->load->front_template('my_account/shipping_custom',$this->data);
	}
	public function biddinglimit()
	{
		$this->load->front_template('my_account/bidding_limit',$this->data);
	}
	public function personal_information()
	{
		if ($this->input->post()) {
            $data = $this->input->post();
            $id = $this->session->userdata('user_id');
            $this->account_model->update('users',$data,array('id'=>$id));
            redirect('my_account/personal_information');
        }
        $this->data['language'] = $this->account_model->all_rows('language');
		$this->load->front_template('my_account/personal_information',$this->data);
	}
	public function billing_info()
	{
		$this->load->front_template('my_account/billing_info',$this->data);
	}
	public function login_and_password()
	{
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($data['password'] == $data['confirm_password']) {
				$us = array('password'=>md5($data['password']));
				$id = $this->session->userdata('user_id');
				$this->account_model->update('users',$data,array('id'=>$id));
            	redirect('my_account/login_and_password');
			}
		}
		$this->load->front_template('my_account/login_password',$this->data);
	}
	public function documents()
	{
		$this->load->front_template('my_account/documents',$this->data);
	}
	public function memberships()
	{
		$this->load->front_template('my_account/membership',$this->data);
	}

}