<?php
class Homepage_model extends CI_Model{
 
    public function CheckRegister1() // ตรวจการเพิ่มข้อมูลซ้ำ เช็คจาก username
    
    {
        $mem_username = $this->input->post('mem_username');
        //num rows exp
        $this->db->select('mem_username');
        $this->db->where('mem_username',$mem_username);
        $query = $this->db->get('tb_member');
        $num = $query->num_rows(); //เช็คว่ามีข้อมูลนี้อยู่ในตารางไหม
        if($num > 0) // ถ้ามีมากกว่า 0 ขึ้นไป คือมีข้อมูลซ้ำ
        {
        echo "<script>"; // ถ้าซ้ำจะโชว์ตรงนี้
        echo "alert('ชื่อผู้ใช้งานซ้ำ กรุณาเพิ่มใหม่อีกครั้ง');";
        echo "window.history.back();";
        echo "</script>";

        }else{ // ถ้าไม่ซ้ำให้เพิ่มข้อมูลเข้าไปปกติ

                $data = array
                (
                    'mem_username'  => $this->input->post('mem_username'),
                    'mem_password'  => $this->input->post('mem_password'),
                    
                    'mem_name'      => $this->input->post('mem_name'),
                    'mem_phone'     => $this->input->post('mem_phone'),
                    'mem_address'   => $this->input->post('mem_address'),
                    
                    'level_id'     => '6'

                );
                $query=$this->db->insert('tb_member',$data);
                if($query)
                {
                echo "<script>"; 
                echo "alert('สมัครสมาชิกสำเร็จ');";

                echo "</script>";
                }else{
                echo "<script>";
                echo "alert('สมัครสมาชิกไม่สำเร็จ');";

                echo "</script>";
                    }

            }
    }

 
} //ปีกสุดท้าย