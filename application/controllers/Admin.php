<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
    {
		parent::__construct();
        if( $this->session->userdata('level_id') != '1')
        {
			redirect('Login','refresh');
        }
		
		$this->load->model('Admin_model');
        // $this->load->model('report_model');
      
    }
	
	public function Admindash()
	{
		$this->load->view('Admin/Admindash_view');
	}

	public function Adminmgkeeper()
	{
		$data['list_keeper']=$this->Admin_model->list_keeper();
		$this->load->view('Admin/Adminmgkeeper_view',$data);
	}

	public function Adminaddkeeper()
	{
		$this->load->view('Admin/Adminaddkeeper_view');
	}

	public function CheckAdminaddkeeper()
	{
		$this->Admin_model->CheckAdminaddkeeper1();
            
        redirect('Admin/Adminmgkeeper','refresh');
	}

	public function Admineditkeeper($mem_id)
	{
			$this->db->where('mem_id',$mem_id);
            $query = $this->db->get('tb_member');
            $fab = $query->row_array();
               
            if($fab['level_id'] != '2'){
    
                $this->load->view('Admin/Admin404_view'); //404ต้องสร้างใหม่นะ
               
            }else{
            $data['edit']=$this->Admin_model->read($mem_id); //โชว์ข้อมูลสมาชิก
           
            $this->load->view('Admin/Admineditkeeper_view',$data);
    
            }
	}

	public function Admineditkeeper1() 
    {
            $this->Admin_model->Admineditkeeper();
            redirect('Admin/Adminmgkeeper','refresh');
	}
	
	public function deletekeeper($mem_id)
    {
             $this->Admin_model->deletekeeper($mem_id);
			 redirect('Admin/Adminmgkeeper','refresh');
    }

	public function Adminmgwardencentral()
	{
		$data['list_wardencentral']=$this->Admin_model->list_wardencentral();
		$this->load->view('Admin/Adminmgwardencentral_view',$data);
	}

	public function Adminaddwardencentral()
	{
		$this->load->view('Admin/Adminaddwardencentral_view');
	}

	public function CheckAdminaddwardencentral()
	{
		$this->Admin_model->CheckAdminaddwardencentral1();
            
        redirect('Admin/Adminmgwardencentral','refresh');
	}

	public function Admineditwardencentral($mem_id)
	{
			$this->db->where('mem_id',$mem_id);
            $query = $this->db->get('tb_member');
            $fab = $query->row_array();
               
            if($fab['level_id'] != '3'){
    
                $this->load->view('Admin/Admin404_view'); //404ต้องสร้างใหม่นะ
               
            }else{
            $data['edit']=$this->Admin_model->read($mem_id); //โชว์ข้อมูลสมาชิก
           
            $this->load->view('Admin/Admineditwardencentral_view',$data);
    
            }
	}

	public function Admineditwardencentral1() 
    {
            $this->Admin_model->Admineditwardencentral();
            redirect('Admin/Adminmgwardencentral','refresh');
	}
	
	public function deletewardencentral($mem_id)
    {
             $this->Admin_model->deletewardencentral($mem_id);
			 redirect('Admin/Adminmgwardencentral','refresh');
    }

	public function Adminmgwardenarea()
	{
		$data['list_wardenarea']=$this->Admin_model->list_wardenarea();
		$this->load->view('Admin/Adminmgwardenarea_view',$data);
	}

	public function Adminaddwardenarea()
	{
		$this->load->view('Admin/Adminaddwardenarea_view');
	}

	public function CheckAdminaddwardenarea()
	{
		$this->Admin_model->CheckAdminaddwardenarea1();
            
        redirect('Admin/Adminmgwardenarea','refresh');
	}

	public function Admineditwardenarea($mem_id)
	{
			$this->db->where('mem_id',$mem_id);
            $query = $this->db->get('tb_member');
            $fab = $query->row_array();
               
            if($fab['level_id'] != '4'){
    
                $this->load->view('Admin/Admin404_view'); //404ต้องสร้างใหม่นะ
               
            }else{
            $data['edit']=$this->Admin_model->read($mem_id); //โชว์ข้อมูลสมาชิก
           
            $this->load->view('Admin/Admineditwardenarea_view',$data);
    
            }
	}

	public function Admineditwardenarea1() 
    {
            $this->Admin_model->Admineditwardenarea();
            redirect('Admin/Adminmgwardenarea','refresh');
	}
	
	public function deletewardenarea($mem_id)
    {
             $this->Admin_model->deletewardenarea($mem_id);
			 redirect('Admin/Adminmgwardenarea','refresh');
	}
	












}
