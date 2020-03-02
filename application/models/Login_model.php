<?php
class Login_model extends CI_Model{
 
public function fetch_user_login($mem_username,$mem_password)
    {
       $this->db->where('mem_username',$mem_username);
       $this->db->where('mem_password',$mem_password);
       $result = $this->db->get('tb_member');
       return $result;

      
    
    }

    public function fetch_user_login1($monk_username,$monk_password)
    {
       $this->db->where('monk_username',$monk_username);
       $this->db->where('monk_password',$monk_password);
       $result = $this->db->get('tb_monk');
       return $result;

      
    
    }


} //ปีกสุดท้าย