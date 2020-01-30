<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wardenarea extends CI_Controller {
	function __construct()
    {
		parent::__construct();
        if( $this->session->userdata('level_id') != '4')
        {
			redirect('Login','refresh');
        }
		
		// $this->load->model('Admin_model');
        // $this->load->model('report_model');
      
    }
	
	public function Wardenareadash()
	{
		$this->load->view('Wardenarea/Wardenareadash_view');
	}
}
