<?php
class Login_model extends CI_Model{
 
public function fetch_user_login($mem_username,$mem_password)
    {
       $this->db->where('mem_username',$mem_username);
       $this->db->where('mem_password',$mem_password);
       $result = $this->db->get('tb_member');
       return $result->row();
    
    }

 
} //ปีกสุดท้าย