<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jom extends CI_Controller {
	function __construct()
    {
		parent::__construct();
        if( $this->session->userdata('level_id') != '6')
        {
			redirect('Login','refresh');
        }
		
		 $this->load->model('Admin_model');
         $this->load->model('Jom_model');
      
    }
	
	public function Jomdash()
	{
		$this->load->view('Jom/Jomdash_view');
	}

	public function Jomeditprofile()
	{
		$mem_id = $_SESSION['mem_id'];

		$data['edit']=$this->Admin_model->read($mem_id);

		$this->load->view('Jom/Jomeditprofile_view',$data);
	}

	public function Jomeditprofile1() 
    {
            $this->Jom_model->Jomeditprofile();
            redirect('Jom/Jomeditprofile','refresh');
	}


	public function Jomaddbooking()
	{
		
		$data['query']=$this->Jom_model->fetchtype();
		$this->load->view('Jom/Jomaddbooking_view',$data);
	}

	public function Jomaddbooking1()
	{
		$mem_id = $_SESSION['mem_id'];

		$data = array(

			'bk_date' => $this->input->post('bk_date'),
			'bk_timejob' => $this->input->post('bk_timejob'),
			'bk_time' => $this->input->post('bk_time'),       
			'bk_location' => $this->input->post('bk_location'),  
			'mem_id' => $this->input->post('mem_id'),  
			'type_id' => $this->input->post('type_id'),  
			'am_id' => $this->input->post('am_id'),  
			'sj_id'   => $this->input->post('sj_id')
		   
		  
					);
		$idhee = $this->Jom_model->Jomaddbooking1($data);	

	// 	if (isset($_POST['submit'])) {
	// 		$user_id=$ord_id;//Pass the userid here
			
	// 		$checkbox = $_POST['keepercheck']; //กูว่าบัคไลน์นี้
		  
	// 		// print_r($checkbox);
	// 		for ($i=0;$i<count($checkbox);$i++) {
	// 			$sss=array(
	// 				'bk_id' => $idhee,
	// 				'mem_id' => $checkbox[$i]
	// 			);
				
				
	// 			$cust_id = $this->jom_model->insert_booking($sss);//Call the modal
	// 	 }
		
        
	// }
	redirect('Jom/Jomshowbooking','refresh');
	}

	public function fetcham()
	{
		if ($this->input->post('type_id'))
		{
			echo $this->Jom_model->fetcham($this->input->post('type_id'));
		}
	}


	public function Jomshowbooking()
	{
		$data['list_bookingjom']=$this->Jom_model->list_bookingjom();
		$this->load->view('Jom/Jomshowbooking_view',$data);
	}
	
}
