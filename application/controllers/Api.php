<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends Front_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    }

	public function index()
	{
		if (isset($_POST['Message']))
        {
            $msg = $_POST['Message'];
            $msg = str_replace('|amp;', '%', $msg);
            // $this->db->insert('data',array('data'=>$_POST['Message']));
            // $id = $this->db->insert_id();
            $id = $this->api_model->insert('data',array('data'=>$msg));
            $my_file = 'xml/'.$id.'.xml';
			$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
			//$text = $msg.'</ImageURL></VehicleDetails>';
			$text = $msg;
			fwrite($handle, $text);
            $this->session->set_userdata('data', $msg);
            print_r($this->session->userdata('data'));
            //$_SESSION['message'] = $_POST['Message'];
        }
	}
	
	public function bids($stock){
	    if (isset($_POST['bid']))
        {
            $bids = $this->api_model->get_row_single('inventory_bids',array('stock_number'=>$stock));
            if ($bids) {
				$this->api_model->update('inventory_bids',array('bid'=>$_POST['bid']),array('stock_number'=>$stock));
			}
			else{
				$this->api_model->insert('inventory_bids',array('stock_number'=>$stock,'bid'=>$_POST['bid']));
			}
            
        }
	}
	
	public function get(){
	    $data = $this->db->get('data')->result_array();
		foreach ($data as $d) {
		    $xml = file_get_contents(base_url('xml/'.$d['id'].'.xml'));
		    $xml = str_replace('&', "%", $xml);
		    //echo $xml;die;
		    $my_file = 'xml/'.$d['id'].'.xml';
			$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
			//$text = $msg.'</ImageURL></VehicleDetails>';
			$text = $xml;
			fwrite($handle, $text);
		    //file_put_contents('/xml/'.$d['id'].'.xml',$xml);
		}
	}
	
	public function show(){
		header('Content-Type: text/html; charset=utf-8'); 
		$data = $this->db->select('*')->from('data')->limit(5000)->get()->result_array();
		//$data = $this->db->get('data')->result_array();
		$con = 0;
		foreach ($data as $d) {
			$xml=simplexml_load_file(base_url('xml/'.$d['id'].'.xml'));

			//print_r(json_decode($xml->AdditionalVehicleInformation));
			$ACV = '';
			$Color = '';
			$Interior_Color = '';
			$Body_Style = '';
			for ($i=0; $i < sizeof($xml->AdditionalVehicleInformation); $i++) { 
				$ac = $xml->AdditionalVehicleInformation[$i];
				if ($ac->Name == 'ACV') {
					$ACV = $ac->Value;
				}
				if ($ac->Name == 'Color') {
					$Color = $ac->Value;
				}
				if ($ac->Name == 'Interior Color') {
					$Interior_Color = $ac->Value;
				}
				if ($ac->Name == 'Body Style') {
					$Body_Style == $ac->Value;
				}
			}
			$make = $this->api_model->get_row_single('makes',array('Name'=>$xml->Make));
			if ($make) {
				$make = $make['id'];
			}
			else{
				$make = $this->api_model->insert('makes',array('Name'=>$xml->Make));
			}
			$model = $this->api_model->get_row_single('models',array('Name'=>$xml->Model, 'Make'=> $make));
			if ($model) {
				$model = $model['id'];
			}
			else{
				$model = $this->api_model->insert('models',array('Name'=>$xml->Model, 'Make'=> $make));
			}
			$type = $this->api_model->get_row_single('vehicle_type',array('Name'=>$xml->SalvageType));
			if ($type) {
				$type = $type['id'];
			}
			else{
				$type = $this->api_model->insert('vehicle_type',array('Name'=>$xml->SalvageType));
			}
			$location = $this->api_model->get_row_single('locations',array('Address'=>$xml->AddressofStock->Address));
			if ($location) {
				$location = $location['id'];
			}
			else{
				$location = $this->api_model->insert('locations',array('Address'=>$xml->AddressofStock->Address,'Location'=>$xml->AddressofStock->State.' - '.$xml->AddressofStock->City,'Country'=>$xml->Vin->Country,'State'=>$xml->AddressofStock->State,'State_Full'=>$xml->CertState,'City'=>$xml->AddressofStock->City,'Zip_Code'=>$xml->AddressofStock->Zip));
			}
			$auction = $this->api_model->get_row_single('auctions',array('Location'=>$location,'Date'=>date('Y-m-d H:m:s', strtotime($xml->LiveAuctionDate))));
			if ($auction) {
				$auction = $auction['id'];
			}
			else{
				$auction = $this->api_model->insert('auctions',array('Auction'=>$xml->AuctionID,'Location'=>$location,'Date'=>date('Y-m-d H:m:s', strtotime($xml->LiveAuctionDate))));
			}
			//echo 1;
			//print_r($xml->Vin->attributes()->ID);
			$record = array(
				'Name' => json_decode($xml->Year).' '.$xml->Make.' '.$xml->Model.' '.$xml->Vin->Series,
				'Make' => $make,
				'Year' => json_decode($xml->Year),
				'Model' => $model,
				'Auction' => $auction,
				'Vehicle_Location' => $xml->AddressofStock->Address,
				'Item' => $xml->ItemID,
				'Destination' => '',
				'Shipping_Price' => '',
				'Stock_ID' => $xml->StockNumber,
				'Type' => $type,
				'Series' => $xml->Vin->Series,
				'Odometer' => $xml->Odometer,
				'Sale_Document' => $xml->SaleDocument,
				'Sale_Document_Notes' => $xml->SaleDocumentNotes,
				'Loss' => $xml->LossType,
				'Damage_Type' => $xml->PrimaryDamage.';'.$xml->SecondaryDamage,
				'ACV' => $ACV,
				'Sale_Status' => $xml->VehicleStatus,
				'Estimated_Repair_Coast' => '',
				'VIN' => $xml->Vin->attributes()->ID,
				'Exterior_Color' => $Color,
				'Interior_Color' => $Interior_Color,
				'Body_Style' => $xml->Vin->Body,
				'Vehicle_Class' => $xml->Vin->VehicleClass,
				'Engine' => $xml->Vin->Engine,
				'Cylinder' => $xml->Vin->Cylinder,
				'Fuel_Type' => $xml->Vin->FuelType,
				'Transmission' => $xml->Vin->Transmission,
				'Driver_Type_' => $xml->Vin->DriveLineType,
				'Manufactured_In' => '',
				'Key_item' => $xml->Key,
				'Start_Code' => $xml->Start,
				'user_id' => 2 
			);
			$inventory = $this->api_model->get_row_single('inventory',array('Stock_ID'=>$xml->StockNumber));
			$id = 0;
			if ($inventory) {
				$id = $this->api_model->update('inventory',$record,array('Stock_ID'=>$xml->StockNumber));
				$id = $inventory['id'];
			}
			else{
				$id = $this->api_model->insert('inventory',$record);
			}
			$this->api_model->delete('inventory_images', array('inventory_id' => $id));
			for ($i=0; $i < sizeof($xml->ImageURL); $i++) { 
				$url = $xml->ImageURL[$i];
				$url = str_replace('%', "&", $url);
				//$url = 'http://example.com/image.php';
				//$name = md5($id.'_'.$i);
				//$img = '/uploads/'.$name.'.jpg';
				$this->api_model->insert('inventory_images',array('inventory_id'=>$id,'images'=>$url));
				//file_put_contents($img, file_get_contents($url));
			}
			if($id > 0){
			    $con++;
    			$this->api_model->delete('data', array('id' => $d['id']));
    			$root_path = str_replace('/application', '/xml', APPPATH);
    	        if ( file_exists($root_path.$d['id'].'.xml')  ) {
    	            unlink( $root_path.$d['id'].'.xml') ;
    	        }
			}
			//unlink('/xml/'.$d['id'].'.xml');
			//print_r($xml);die;
			//print_r($xml);
			//print_r($record);
			//$this->db->insert('inventory',$record);
			//$id = $this->api_model->insert('inventory',$record);
			//print_r($xml->AdditionalVehicleInformation[1]);
			//break;
		}
	    //echo '<pre>';print_r($this->db->get('data')->result_array());echo '</pre>';
	    echo $con;
	}

}