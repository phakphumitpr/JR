<?php
class Monk_model extends CI_Model{
 
    public function Monkeditprofile()
    {
        $data = array
        (
            
            'monk_password'  => $this->input->post('monk_password'),
           
            'monk_name'      => $this->input->post('monk_name'),
            'monk_phone'     => $this->input->post('monk_phone'),
            
            
           
        );
        $this->db->where('monk_id',$this->input->post('monk_id'));
        $query = $this->db->update('tb_monk',$data);
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
        'monk_id' => $this->input->post('monk_id'),   
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

    public function readbkmonk($monk_id) 
        {
        $this->db->select('*');
        $this->db->from('tb_booking');
        $this->db->where('monk_id',$monk_id);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }





} //ปีกสุดท้าย