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
		 $this->load->model('Keeper_model');
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

	public function BookingMonk()
	{
		$data['list_bookingkeeper']=$this->Keeper_model->list_bookingkeeper();
		$this->load->view('Monk/Bookingmonk_view',$data);
		
	}
	
	public function Monkjkbooking($bk_id)
	{
		$data['show']=$this->Keeper_model->readbk($bk_id);
		$data['statusjong']=$this->Keeper_model->list_statusjong();
		$this->load->view('Monk/Monkjkbooking_view',$data);

	}
	
	public function Monkmanagement($idtestt)
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
