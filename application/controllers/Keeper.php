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
		$this->load->model('jom_model');
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
		// $this->db->where('dkw_id',1);
		// $query = $this->db->get('tb_daykeywat');
		// $data = $query->row_array();

		// $this->db->where('dkw_id',$data['dkw_id']);
		// $query2 = $this->db->get('tb_monkcheck');
		// $data2 = $query2->row_array();

		//echo $data2['mc_date'];

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

	public function Keepereditmonk($monk_id)
	{
			$this->db->where('monk_id',$monk_id);
            $query = $this->db->get('tb_monk');
            $fab = $query->row_array();
               
            if($fab['level_id'] != '5'){
    
                $this->load->view('Keeper/Keeper404_view'); //404ต้องสร้างใหม่นะ
               
            }else{
            $data['edit']=$this->Admin_model->readm($monk_id); //โชว์ข้อมูลสมาชิก
           
            $this->load->view('Keeper/Keepereditmonk_view',$data);
    
            }
	}

	public function Keepereditmonk1() 
    {
            $this->Keeper_model->Keepereditmonk();
            redirect('Keeper/Keepermgmonk','refresh');
	}
	
	public function deletemonk($monk_id)
    {
             $this->Keeper_model->deletemonk($monk_id);
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

	public function Keeperjkbooking($bk_id)
	{
		$data['show']=$this->Keeper_model->readbk($bk_id);
		
		$data['statusjong']=$this->Keeper_model->list_statusjong();
		$this->load->view('Keeper/Keeperjkbooking_view',$data);
	}

	public function keepermanagement($idtestt)
	{
		if (isset($_POST['submit'])) {
			//Pass the userid here
			
			$checkbox = $_POST['customCheck1']; 
			$j = $_POST['sj_id'];
		  
			// print_r($checkbox);
			for ($i=0;$i<count($checkbox);$i++) {
				$sss=array(
					'bk_id' => $idtestt,
					'monk_id' => $checkbox[$i]
				);
				// $this->db->insert('tb_statusmonk',$sss);
				
			  $this->jom_model->Jomaddbooking2($sss);//Call the modal
			  $this->db->where('monk_id',$checkbox[$i]);
		$data3 = array(
		'sm_id' => '1'
		);
		$this->db->update('tb_monk',$data3);
		 }

		$this->db->where('bk_id',$idtestt);
		
		$data4 = array(
		'sj_id' => $j
		);
		$this->db->update('tb_booking',$data4);



		if($j == 4){
			$this->db->where('bk_id',$idtestt);
			$query = $this->db->get('tb_statusmonk');
			$data = $query->result_array();
			foreach ($data as $pp) { 
	
				$this->db->where('monk_id',$pp['monk_id']);
				$pp2 = $this->db->get('tb_monk');
				$pp1 = $pp2->row_array();
				echo $pp1['sm_id'];

				$dataaa = array(
					'sm_id' => 0
					);
				$this->db->where('monk_id',$pp['monk_id']);
				$this->db->update('tb_monk',$dataaa);
				}
		}

		}
	
		redirect('Keeper/Keeperdash');
	
		}

	
	
	
}

























