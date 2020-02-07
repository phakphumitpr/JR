<?php
class Keeper_model extends CI_Model{
 

    public function read($dkw_id) 
        {
        $this->db->select('*');
        $this->db->from('tb_daykeywat');
        $this->db->where('dkw_id',$dkw_id);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function readbk($bk_id) 
        {
        $this->db->select('*');
        $this->db->from('tb_booking');
        $this->db->where('bk_id',$bk_id);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }


    public function list_daykeywat()
    {
        
        $query = $this->db->get('tb_daykeywat');
        return $query->result();
    }

    public function CheckKeeperadddaykeywat1() // ตรวจการเพิ่มข้อมูลซ้ำ เช็คจาก name
    
    {
        $dkw_name = $this->input->post('dkw_name');
        //num rows exp
        $this->db->select('dkw_name');
        $this->db->where('dkw_name',$dkw_name);
        $query = $this->db->get('tb_daykeywat');
        $num = $query->num_rows(); //เช็คว่ามีข้อมูลนี้อยู่ในตารางไหม
        if($num > 0) // ถ้ามีมากกว่า 0 ขึ้นไป คือมีข้อมูลซ้ำ
        {
        echo "<script>"; // ถ้าซ้ำจะโชว์ตรงนี้
        echo "alert('ชื่องานซ้ำ กรุณาเพิ่มใหม่อีกครั้ง');";
        echo "window.history.back();";
        echo "</script>";

        }else{ // ถ้าไม่ซ้ำให้เพิ่มข้อมูลเข้าไปปกติ

                $data = array
                (
                    'dkw_name'  => $this->input->post('dkw_name'),
                    'dkw_date'  => $this->input->post('dkw_date'),
                    'dkw_detail'  => $this->input->post('dkw_detail')
                    

                );
                $query=$this->db->insert('tb_daykeywat',$data);
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


    public function Keepereditprofile()
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

    public function Keepereditdaykeywat()
    {
        $data = array
        (
            
            'dkw_name'  => $this->input->post('dkw_name'),
            'dkw_date'  => $this->input->post('dkw_date'),
            'dkw_detail'  => $this->input->post('dkw_detail')
            
           
        );
        $this->db->where('dkw_id',$this->input->post('dkw_id'));
        $query = $this->db->update('tb_daykeywat',$data);
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

    public function deletedaykeywat($dkw_id) // ลบงานวันสำคัญ
    {
        $query =  $this->db->delete('tb_daykeywat',array('dkw_id'=>$dkw_id));
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

    public function list_monk()
        {
            $this->db->select('*');
            $this->db->where('level_id','5');
            $query = $this->db->get('tb_member');
            return $query->result();
        }
 
        public function CheckKeeperaddmonk1() // ตรวจการเพิ่มข้อมูลซ้ำ เช็คจาก username
    
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
                        
                        'level_id'     => '5'
    
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

        public function Keepereditmonk()
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

    public function deletemonk($mem_id) // ลบสมาชิก
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

    public function list_monkcheck()
    {
        // $this->db->select('*');
        // $this->db->where('mc_status','1');
        $query = $this->db->get('tb_monkcheck');
        return $query->result();
    }

    public function list_jubjub()
    {
        $query = $this->db->query("SELECT `mc_date`, COUNT(*) as total FROM tb_monkcheck WHERE `mc_status`='1'GROUP BY `mc_date`");
            return $query->result();
    }


    public function list_bookingkeeper()
    {
        $query = $this->db->get('tb_booking');
        return $query->result();
    }
    

    public function list_statusjong()
    {
        $query = $this->db->get('tb_statusjong');
        return $query->result();
    }

} //ปีกสุดท้าย