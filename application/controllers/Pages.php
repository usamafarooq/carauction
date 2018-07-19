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
		$this->data['searchdiv'] = 0;
		if ( $this->input->post() && ( $url == 'contact-us' || $url == 'call-back' || $url == 'e-contact' )  ) {


			$headers = "From: " . strip_tags($this->input->post('email')) . "\r\n";
			$headers .= "Reply-To: ". strip_tags( $this->input->post('email') ) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

			$msg = "Name: ". $this->input->post('name')." <br>";
			if ($this->input->post('number'))
			{
				$msg .= "Number: ". $this->input->post('number')." <br>";
			}
			if ( $this->input->post('country') )
			{
				$msg .= "Country: ".$this->input->post('country')." <br> ";
			}
			$msg .= 'Message: '. $this->input->post('message');

			$subject = $this->input->post('subject');

			$this->send_email($subject, $msg, $headers);

			echo json_encode('Email sent successfully');
			die;


		}
		$this->load->front_template('page',$this->data);
	}

}
