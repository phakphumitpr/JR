<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monk extends CI_Controller {
	function __construct()
    {
		parent::__construct();
        if( $this->session->userdata('level_id') != '5')
        {
			redirect('Login','refresh');
        }
		
		 $this->load->model('Admin_model');
         $this->load->model('Monk_model');
      
    }
	
	public function Monkdash()
	{
		$this->load->view('Monk/Monkdash_view');
	}

	public function Monkeditprofile()
	{
		$mem_id = $_SESSION['mem_id'];

		$data['edit']=$this->Admin_model->read($mem_id);

		$this->load->view('Monk/Monkeditprofile_view',$data);
	}

	public function Monkeditprofile1() 
    {
            $this->Monk_model->Monkeditprofile();
            redirect('Monk/Monkeditprofile','refresh');
	}

	public function Monkcheck()
	{
		$this->load->view('Monk/Monkcheck_view');
	}

	public function Monkcheckadd()
	{
		$mem_id = $_SESSION['mem_id']; 

		$this->Monk_model->Monkcheckadd();	
        redirect('Monk/Monkcheck','refresh');
	}
}
