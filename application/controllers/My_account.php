<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_account extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
		$this->load->front_template('my_account/index',$this->data);
	}
	public function watchlist()
	{
		$this->load->front_template('my_account/watchlist',$this->data);
	}
	public function saved_search()
	{
		$this->load->front_template('my_account/saved_search',$this->data);
	}
	public function opentickets()
	{
		$this->load->front_template('my_account/opentickets',$this->data);
	}
	public function closetickets()
	{
		$this->load->front_template('my_account/closetickets',$this->data);
	}
	public function createtickets()
	{
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
		$this->load->front_template('my_account/personal_information',$this->data);
	}
	public function billing_info()
	{
		$this->load->front_template('my_account/billing_info',$this->data);
	}
	public function login_and_password()
	{
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