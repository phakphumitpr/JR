<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	function __construct()
    {
		
		parent::__construct();
		$this->load->model('Homepage_model');
        $this->load->model('Keeper_model');
      
    }
	
	public function index()
	{
		$data['list_daykeywat']=$this->Keeper_model->list_daykeywat();
		$this->load->view('Homepage_view',$data);
	}

	public function CheckRegister()
	{
		$this->Homepage_model->CheckRegister1();
            
        redirect('Homepage','refresh');
	}
}
