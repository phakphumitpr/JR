<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
        function __construct(){ 
            parent::__construct();
            $this->load->model('Login_model');
    }
	
	public function index()
	{
		//  print_r($_SESSION);
		if($this->session->userdata('mem_username')==''){ 

		$this->load->view('Login_view');

		}
		else{
			$level_id = $_SESSION['level_id'];

			// echo 'level'.$level_id;

		if      ($level_id === '1'){
				redirect('Admin/Admindash','refresh');
								
		    }elseif ($level_id === '2'){
				redirect('Keeper/Keeperdash','refresh');
			
        }elseif ($level_id === '3'){
				redirect('Wardencentral/Wardencentraldash','refresh');

        }elseif ($level_id === '4'){
        redirect('Wardenarea/Wardenareadash','refresh');

        }elseif ($level_id === '5'){
				redirect('Monk/Monkdash','refresh');

	    	}elseif ($level_id === '6'){
				redirect('Jom/Jomdash','refresh');
			}
			
		}
	}

	public function checklogin()
    {
           $result = $this->Login_model->fetch_user_login
           (
               $this->input->post('mem_username'),
               $this->input->post('mem_password')
           );

           // print_r($result);

           // exit;

           if(!empty($result)) //ถ้าตัวแปรกresultไม่เท่ากับค่าว่าง
           {
               $sess = array
               (
                   'mem_id'  	 => $result->mem_id,
                   'mem_username' => $result->mem_username,
                   'mem_password' => $result->mem_password,
                   'level_id'    => $result->level_id,
                
               );
               // echo '<br>';
               // print_r($sess);
               // exit;

               $this->session->set_userdata($sess);
               // echo '<br>';
               // print_r($_SESSION);

               $level_id = $_SESSION['level_id'];

               // echo 'level'.$mb_level;

            if      ($level_id === '1'){
				    redirect('Admin/Admindash','refresh');
								
		      }elseif ($level_id === '2'){
				    redirect('Keeper/Keeperdash','refresh');
			
        	}elseif ($level_id === '3'){
				    redirect('Wardencentral/Wardencentraldash','refresh');

       		}elseif ($level_id === '4'){
                redirect('Wardenarea/Wardenareadash','refresh');
                
        	}elseif ($level_id === '5'){
					redirect('Monk/Monkdash','refresh');
					
			    }elseif ($level_id === '6'){
				    redirect('Jom/Jomdash','refresh');
        }
        
        }else{
                $this->session->unset_userdata(array('mem_id','mem_username','mem_password','level_id',));
                 redirect('Login');
           }
    }


    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
	}
	


} ////////////////////////////////////////////////////////////////////////////////////
