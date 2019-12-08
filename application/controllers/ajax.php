<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
    	parent::__construct();
		
		$this->load->helper('status');
		
		$this->load->model('../m_crud');
		$this->load->model('../m_global');
	}
}