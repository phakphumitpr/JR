<?php
class Jom_model extends CI_Model{
 
    public function Jomeditprofile()
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
// kjjjjj
    
   
    public function fetchtype()
    {
        $this->db->select('*');
        $this->db->from('tb_type');
        $query = $this->db->get();
        return $query->result();
    }

    public function fetcham($type_id)
    {
        $this->db->select('*');
        $this->db->from('tb_amountmonk');
        $this->db->where('type_id', $type_id);
        $query  = $this->db->get();
        $output = '<option value="">เลือกจำนวน</option>';
        foreach ($query->result() as $row)
        {
            $output .= '<option value="' . $row->am_id . '">' . $row->am_amount .'</option>';
        }
        return $output;
    }

    public function list_bookingjom()
    {
        $mem_id = $_SESSION['mem_id'];
        //  print_r($_SESSION);
        $this->db->select('*');
        $this->db->where('mem_id',$this->session->userdata('mem_id'));
        $query = $this->db->get('tb_booking');
        return $query->result();
    }


    public function Jomaddbooking1($data) 
    {

        $this->db->insert('tb_booking',$data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function Jomaddbooking2($data){
        $this->db->insert('tb_statusmonk', $data);
    }
    // $data = array(

    //     'bk_date' => $this->input->post('bk_date'),
    //     'bk_timejob' => $this->input->post('bk_timejob'),
    //     'bk_time' => $this->input->post('bk_time'),       
    //     'bk_location' => $this->input->post('bk_location'),  
    //     'mem_id' => $this->input->post('mem_id'),  
    //     'type_id' => $this->input->post('type_id'),  
    //     'am_id' => $this->input->post('am_id'),  
    //     'sj_id'   => $this->input->post('sj_id')
       
      
    //             );
    //             $query=$this->db->insert('tb_booking',$data);

    //             $data2 = array(

                   
    //                 'bk_id' => $this->input->post('bk_date'),
    //                 'mem_id' => $this->input->post('bk_timejob'),
         
                   
                  
    //                         );
    //                         $query=$this->db->insert('tb_statusmonk',$data);
    //             if($query)
    //             {
    //                 echo "<script>"; 
    //                 echo "alert('เพิ่มข้อมูลสำเร็จ');";
                    
    //                 echo "</script>";
    //             }else
    //             {
    //                 echo "<script>";
    //                 echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
                    
    //                 echo "</script>";
    //             }
               
    // }

} //ปีกสุดท้าย