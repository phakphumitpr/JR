<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keeper extends CI_Controller {
	function __construct()
    {
		parent::__construct();
        if( $this->session->userdata('level_id') != '2')
        {
			redirect('Login','refresh');
        }
		
		$this->load->model('Keeper_model');
        $this->load->model('Admin_model');
      
    }
	
	public function Keeperdash()
	{
		$this->load->view('Keeper/Keeperdash_view');
	}

	public function Keepereditprofile()
	{
		$mem_id = $_SESSION['mem_id'];

		$data['edit']=$this->Admin_model->read($mem_id);

		$this->load->view('Keeper/Keepereditprofile_view',$data);
	}

	public function Keepereditprofile1() 
    {
            $this->Keeper_model->Keepereditprofile();
            redirect('Keeper/Keepereditprofile','refresh');
	}

	public function Keepermgdaykeywat()
	{
		$data['list_daykeywat']=$this->Keeper_model->list_daykeywat();
		$this->load->view('Keeper/Keepermgdaykeywat_view',$data);
	}

	public function Keeperadddaykeywat()
	{
		$this->load->view('Keeper/Keeperadddaykeywat_view');
	}

	public function CheckKeeperadddaykeywat()
	{
		$this->Keeper_model->CheckKeeperadddaykeywat1();
            
        redirect('Keeper/Keepermgdaykeywat','refresh');
	}

	public function Keepereditdaykeywat($dkw_id)
	{
			$this->db->where('dkw_id',$dkw_id);
            $query = $this->db->get('tb_daykeywat');
            $fab = $query->row_array();
            
            if($dkw_id != $fab['dkw_id']){   // ถ้า id ที่ส่งมาไม่มีในเบส 
                
                $this->load->view('Keeper/Keeper404_view');
		
		}else{
            $data['edit']=$this->Keeper_model->read($dkw_id); //โชว์ข้อมูลงานวันสำคัญ
           
            $this->load->view('Keeper/Keepereditdaykeywat_view',$data);
		}
	}

	public function Keepereditdaykeywat1() 
    {
            $this->Keeper_model->Keepereditdaykeywat();
            redirect('Keeper/Keepermgdaykeywat','refresh');
	}

	public function deletedaykeywat($dkw_id)
    {
             $this->Keeper_model->deletedaykeywat($dkw_id);
			 redirect('Keeper/Keepermgdaykeywat','refresh');
    }

	public function Keepermgmonk()
	{
		$data['list_monk']=$this->Keeper_model->list_monk();
		$this->load->view('Keeper/Keepermgmonk_view',$data);
	}

	public function Keeperaddmonk()
	{
		$this->load->view('Keeper/Keeperaddmonk_view');
	}

	public function CheckKeeperaddmonk()
	{
		$this->Keeper_model->CheckKeeperaddmonk1();
            
        redirect('Keeper/Keepermgmonk','refresh');
	}

	public function Keepereditmonk($mem_id)
	{
			$this->db->where('mem_id',$mem_id);
            $query = $this->db->get('tb_member');
            $fab = $query->row_array();
               
            if($fab['level_id'] != '5'){
    
                $this->load->view('Keeper/Keeper404_view'); //404ต้องสร้างใหม่นะ
               
            }else{
            $data['edit']=$this->Admin_model->read($mem_id); //โชว์ข้อมูลสมาชิก
           
            $this->load->view('Keeper/Keepereditmonk_view',$data);
    
            }
	}

	public function Keepereditmonk1() 
    {
            $this->Keeper_model->Keepereditmonk();
            redirect('Keeper/Keepermgmonk','refresh');
	}
	
	public function deletemonk($mem_id)
    {
             $this->Keeper_model->deletemonk($mem_id);
			 redirect('Keeper/Keepermgmonk','refresh');
	}
	
	public function Keepercheckmonk()
	{
		$data['list_monkcheck']=$this->Keeper_model->list_monkcheck();
		$data['list_jubjub']=$this->Keeper_model->list_jubjub();
		$this->load->view('Keeper/Keepercheckmonk_view',$data);
		
	}

	public function Keepermgbooking()
	{
		$data['list_bookingkeeper']=$this->Keeper_model->list_bookingkeeper();
		$this->load->view('Keeper/Keepermgbooking_view',$data);
	}

}

