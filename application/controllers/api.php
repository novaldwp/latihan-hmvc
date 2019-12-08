<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Api extends CI_Controller {

	public function __construct() {
    	parent::__construct();
		
		$this->load->helper('status');
		$this->load->helper('message');
		$this->load->helper('global');
			
		$this->load->model('../m_crud');
		$this->load->model('../m_global');
	}
}