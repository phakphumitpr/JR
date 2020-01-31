<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wardencentral extends CI_Controller {
	function __construct()
    {
		parent::__construct();
        if( $this->session->userdata('level_id') != '3')
        {
			redirect('Login','refresh');
        }
		
		 $this->load->model('Admin_model');
         $this->load->model('Wardencentral_model');
      
    }
	
	public function Wardencentraldash()
	{
		$this->load->view('Wardencentral/Wardencentraldash_view');
	}

	public function Wardencentraleditprofile()
	{
		$mem_id = $_SESSION['mem_id'];

		$data['edit']=$this->Admin_model->read($mem_id);

		$this->load->view('Wardencentral/Wardencentraleditprofile_view',$data);
	}

	public function Wardencentraleditprofile1() 
    {
            $this->Wardencentral_model->Wardencentraleditprofile();
            redirect('Wardencentral/Wardencentraleditprofile','refresh');
	}

	public function Wardencentralmgpro()
	{
		$data['list_product']=$this->Wardencentral_model->list_product();
		$this->load->view('Wardencentral/Wardencentralmgpro_view',$data);
	}

	public function Wardencentraladdpro()
	{
		$data['list_typepro']=$this->Wardencentral_model->list_typepro();
		$this->load->view('Wardencentral/Wardencentraladdpro_view',$data);
	}

	public function CheckWardencentraladdpro()
	{
		$this->Wardencentral_model->CheckWardencentraladdpro();
            
        redirect('Wardencentral/Wardencentralmgpro','refresh');
	}















	
}
