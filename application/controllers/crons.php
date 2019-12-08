<?php 

class Crons extends CI_Controller {

	public function __construct() {
    	parent::__construct();
	}

	function send_notification() {
		// get from post
		$token = $this->input->post('token');
		if($token == "") {
			$result = "";
		}
		else {
			// load helper
			$this->load->helper('fcm');
			
			$id 	= $this->input->post('id');
			$title 	= $this->input->post('title');
			
			// set variabel
			$device_token[] = $token;
			$message = "Atas nama : Dinie Dianie. Jumlah pembayaran  Rp 100.00 menggunakan metode pembayaran Cash";
			
			// send notif
			// send_firebase_notification($device_token, $title, $message, $id, NULL); 
			$result = send_firebase_datanotification($device_token, $title, $message, $id, NULL, 0, "");
		}
		
		// set data
		$data['token']  = $token;
		$data['result'] = $result;
		 
		// set view
		$this->load->view('../v_header');
		$this->load->view('../v_top');
		$this->load->view('main/v_notif', $data);
		$this->load->view('../v_bottom');
		$this->load->view('../v_footer');
	}
}