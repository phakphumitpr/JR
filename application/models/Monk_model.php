<?php
class Monk_model extends CI_Model{
 
    public function Monkeditprofile()
    {
        $data = array
        (
            
            'mem_password'  => $this->input->post('mem_password'),
           
            'mem_name'      => $this->input->post('mem_name'),
            'mem_phone'     => $this->input->post('mem_phone'),
            'mem_address'   => $this->input->post('mem_address'),
            
           
        );
        $this->db->where('mem_id',$this->input->post('mem_id'));
        $query = $this->db->update('tb_member',$data);
        if($query){
           echo "<script>"; 
           echo "alert('แก้ไขข้อมูลสำเร็จ');";
           
           echo "</script>";
       }else{
           echo "<script>";
           echo "alert('แก้ไขข้อมูลไม่สำเร็จ');";
           
           echo "</script>";
       }
    }

    public function Monkcheckadd() 
    {
        $this->db->where('dkw_date',$this->input->post('mc_date'));
        $query = $this->db->get('tb_daykeywat');
        $dada = $query->row_array();
        if($this->input->post('mc_date') == $dada['dkw_date']){
            $qq = $dada['dkw_id'];
        }else{
            $qq = '0';
        }
        
    $data = array(

        'mc_date' => $this->input->post('mc_date'),
        'mem_id' => $this->input->post('mem_id'),   
        'dkw_id' => $qq,  
        'mc_status'   => $this->input->post('mc_status')
       
      
                );
                $query=$this->db->insert('tb_monkcheck',$data);
                if($query)
                {
                    echo "<script>"; 
                    echo "alert('เพิ่มข้อมูลสำเร็จ');";
                    
                    echo "</script>";
                }else
                {
                    echo "<script>";
                    echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
                    
                    echo "</script>";
                }
               
    }

 
} //ปีกสุดท้าย