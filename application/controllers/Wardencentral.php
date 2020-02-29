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
		$this->load->view('Wardencentral/Wardencentralmgpro_view');
	}
}
