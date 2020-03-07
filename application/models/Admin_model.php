<?php
class Admin_model extends CI_Model{
 
    public function CheckAdminaddkeeper1() // ตรวจการเพิ่มข้อมูลซ้ำ เช็คจาก username
    
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
                    
                    'level_id'     => '2'

                );
                $query=$this->db->insert('tb_member',$data);
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


    public function CheckAdminaddwardencentral1() // ตรวจการเพิ่มข้อมูลซ้ำ เช็คจาก username
    
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
                    
                    'level_id'     => '3'

                );
                $query=$this->db->insert('tb_member',$data);
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

    public function CheckAdminaddwardenarea1() // ตรวจการเพิ่มข้อมูลซ้ำ เช็คจาก username
    
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
                    
                    'level_id'     => '4'

                );
                $query=$this->db->insert('tb_member',$data);
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
    
        
        public function list_keeper()
        {
            $this->db->select('*');
            $this->db->where('level_id','2');
            $query = $this->db->get('tb_member');
            return $query->result();
        }

        public function list_wardencentral()
        {
            $this->db->select('*');
            $this->db->where('level_id','3');
            $query = $this->db->get('tb_member');
            return $query->result();
        }

        public function list_wardenarea()
        {
            $this->db->select('*');
            $this->db->where('level_id','4');
            $query = $this->db->get('tb_member');
            return $query->result();
        }

        public function read($mem_id) 
        {
        $this->db->select('*');
        $this->db->from('tb_member');
        $this->db->where('mem_id',$mem_id);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    
    public function Admineditkeeper()
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

    public function deletekeeper($mem_id) // ลบสมาชิก
    {
        $query =  $this->db->delete('tb_member',array('mem_id'=>$mem_id));
        if($query){
            echo "<script>"; 
            echo "alert('ลบข้อมูลสำเร็จ');";
            
            echo "</script>";
        }else{
            echo "<script>";
            echo "alert('ลบข้อมูลไม่สำเร็จ');";
            
            echo "</script>";
        }
    }

    public function Admineditwardencentral()
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

    public function deletewardencentral($mem_id) // ลบสมาชิก
    {
        $query =  $this->db->delete('tb_member',array('mem_id'=>$mem_id));
        if($query){
            echo "<script>"; 
            echo "alert('ลบข้อมูลสำเร็จ');";
            
            echo "</script>";
        }else{
            echo "<script>";
            echo "alert('ลบข้อมูลไม่สำเร็จ');";
            
            echo "</script>";
        }
    }

    public function Admineditwardenarea()
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

    public function deletewardenarea($mem_id) // ลบสมาชิก
    {
        $query =  $this->db->delete('tb_member',array('mem_id'=>$mem_id));
        if($query){
            echo "<script>"; 
            echo "alert('ลบข้อมูลสำเร็จ');";
            
            echo "</script>";
        }else{
            echo "<script>";
            echo "alert('ลบข้อมูลไม่สำเร็จ');";
            
            echo "</script>";
        }
    }
 
} //ปีกสุดท้าย