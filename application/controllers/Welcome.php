<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	

	public function pp()
	{
		
		$this->db->where('bk_id','1');
		$query = $this->db->get('tb_statusmonk');
		$data = $query->result_array();
		foreach ($data as $pp) { 
			
			
			$this->db->where('mem_id',$pp['mem_id']);
			$pp2 = $this->db->get('tb_member');
			$pp1 = $pp2->row_array();
			echo $pp1['sm_id'];
			}
		
	}
}
