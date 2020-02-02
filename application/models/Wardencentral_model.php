<?php
class Wardencentral_model extends CI_Model{
 
    public function Wardencentraleditprofile()
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


    public function list_product()
    {
        $query = $this->db->get('tb_product');
        return $query->result();
    }

    public function list_typepro()
    {
        $query = $this->db->get('tb_typepro');
        return $query->result();
    }

    public function CheckWardencentraladdpro() // ตรวจการเพิ่มข้อมูลซ้ำ เช็คจาก username
    
    {
        $p_name = $this->input->post('p_name');
        //num rows exp
        $this->db->select('p_name');
        $this->db->where('p_name',$p_name);
        $query = $this->db->get('tb_product');
        $num = $query->num_rows(); //เช็คว่ามีข้อมูลนี้อยู่ในตารางไหม
        if($num > 0) // ถ้ามีมากกว่า 0 ขึ้นไป คือมีข้อมูลซ้ำ
        {
        echo "<script>"; // ถ้าซ้ำจะโชว์ตรงนี้
        echo "alert('ชื่อพัสดุซ้ำ กรุณาเพิ่มใหม่อีกครั้ง');";
        echo "window.history.back();";
        echo "</script>";

        }else{ // ถ้าไม่ซ้ำให้เพิ่มข้อมูลเข้าไปปกติ

                $data = array
                (
                    'p_name'      => $this->input->post('p_name'),
                    'p_amount'     => $this->input->post('p_amount'),
                    'typepro_id'   => $this->input->post('typepro_id')
                    
                    

                );
                $query=$this->db->insert('tb_product',$data);
                if($query)
                {
                echo "<script>"; 
                echo "alert('เพิ่มข้อมูลสำเร็จ');";

                echo "</script>";
                }else{
                echo "<script>";
                echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";

                echo "</script>";
                    }

            }
    }
 
} //ปีกสุดท้าย