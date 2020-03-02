<!DOCTYPE html>
<html lang="en">



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url(); ?>./assets2/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>./assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo base_url(); ?>./assets2/css/argon.css?v=1.1.0" rel="stylesheet">




        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <title>Keeper</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>./Sathu/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

    <!--input -->
    <!-- Icons font CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>./Sathu/input/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>./Sathu/intput/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/css/main.css" rel="stylesheet" media="all">  <!--input -->

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $this->session->userdata('mem_username');?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Keeper/Keeperdash');?>">
          <i class="fas fa-fw fa-home"></i>
          <span>หน้าหลัก</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Keeper/Keepereditprofile');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>ข้อมูลส่วนตัว</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Keeper/Keepermgdaykeywat');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>งานวันสำคัญของวัด</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Keeper/Keepermgmonk');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>ข้อมูลพระ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
        <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Keeper/Keepercheckmonk');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>การรับกิจนิมนต์พระ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
        <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Keeper/Keepermgbooking');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>การจองนิมนต์พระ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
        <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('...');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>การจองศาลาวัด</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
        <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Login/Logout');?>">
          <i class="fas fa-fw fa-lock"></i>
          <span>ออกจากระบบ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Begin Page Content -->
  <div class="container-fluid">
  <br>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">จัดการการนิมนต์พระ</h4>
            </div>
  </div>
  <!-- /.container-fluid -->

  <div class="card-body">
  <?php  $stringrow = base_url(uri_string());
        $arraystate = (explode("/", $stringrow));
        $idtestt = ($arraystate[6]);  ?>
                    <form action="<?php echo site_url('Keeper/keepermanagement/'.$idtestt); ?>" method="post">
                      
                    <div class="form-row m-b-55">
                            <div class="value">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="form-control" type="text" name="bk_date"
                        <?php 
                             $var_date = $show->bk_date;
                             $strDate = $var_date;
                             $strYear = date("Y",strtotime($strDate))+543;
                             $strMonth= date("n",strtotime($strDate));
                             $strDay= date("j",strtotime($strDate));
                             
                             $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรฎาคม","สิงหาคม","กันยายน","ตุลาคม",
                             "พฤศจิกายน","ธันวาคม");
                             $strMonthThai=$strMonthCut[$strMonth];
                                                
                            // echo $strDay." ".$strMonthThai." ".$strYear;
                        ?>
                            value="<?php echo $strDay." ".$strMonthThai." ".$strYear;?>" readonly>

                                            <label class="label--desc">วัน เดือน ปี</label>
                                        </div>
                                    </div>



                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="form-control" type="text" name="type_id"
                        <?php
                            $this->db->where('type_id',$show->type_id);
                            $query = $this->db->get('tb_type');
                            $data = $query->row_array();
                        ?>
                                            value="<?php echo $data['type_name'];?>" readonly>
                                            <label class="label--desc">ประเภทงาน</label>
                                        </div>
                                    </div>


                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="form-control" type="text" name="am_id"
                        <?php
                            $this->db->where('am_id',$show->am_id);
                            $query = $this->db->get('tb_amountmonk');
                            $dow = $query->row_array();
                        ?>
                                            value="<?php echo $dow['am_amount'];?>" readonly>
                                            <label class="label--desc">จำนวนพระ | รูป</label>
                                        </div>
                                    </div>

                                    <div class="col-2">

                                    <select class="form-control" name="sj_id">

 
                          <?php 
        
                          $this->db->where('sj_id',$show->sj_id);
                          $query = $this->db->get('tb_statusjong');
                          $data = $query->row_array();
                          ?>
                          
                                    <option  value=""><?php echo $data['sj_name'];?> </option>
                                        <?php foreach ($statusjong as $fab) { ?>
                                              
                                              <option required value="<?php echo $fab->sj_id;?>"><?php echo $fab->sj_name;?> </option>
                                         <?php } ?>
                                    </select>
                                    </div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn--radius-2 btn--red" name="submit" type="submit">ยืนยัน</button>
                        </div>
                                </div>
                            </div>
                        </div>

                        
                    <?php 

                    $this->db->select('tb_monk.*');
                   $this->db->from('tb_monk');
                   $this->db->where('level_id',5);
                   $query = $this->db->get();
                   $results = $query->result_array();
                   ?>
	<?php	foreach ($results as $result) {
                       ?>
                   <?php

                   $this->db->where('mem_id',$result['mem_id']);
                   $query1 = $this->db->get('tb_booking');
                   $results1 = $query1->row_array();

                   $this->db->where('mc_date',$results1['bk_date']);
                   $query2 = $this->db->get('tb_monkcheck');
                   $results2 = $query2->row_array();

                  //        $this->db->select('tb_member.*');
                  //  $this->db->from('tb_member');
                  //  $this->db->where('bk_date','2020-02-20');
                  //  $query = $this->db->get();
                  //  $results = $query->result_array();

                   ?>
                  
                   <table class="table table-bordered" id="dataTable" width="10px"  cellspacing="0">
                <thead>
                     <!-- <tr role="row" class="info" bgcolor="#76D7C4"> -->
                     <th <?php $hee = $result['sm_id']; if($hee > 0){ ?> style="display:none" <?php } ?>class="sorting" tabindex="1" rowspan="1" colspan="1">ชื่อพระ <?php echo $results1['bk_date']; ?></th>
                     <th <?php $hee = $result['sm_id']; if($hee > 0){ ?> style="display:none" <?php } ?>class="sorting" tabindex="1" rowspan="1" colspan="1" style="width:  60px; height:50px;"></th>
                      
                  
                  </thead>
                  <!-- <tr role="row"> -->
                  <?php ?>
                       <td <?php $hee = $result['sm_id']; if($hee > 0){ ?> style="display:none" <?php } ?>> <?php echo $result['monk_name'];  ?>  </td> 
                                <td <?php $hee = $result['sm_id']; if($hee > 0){ ?> style="display:none" <?php } ?>><input type="checkbox" id="customCheck1" name="customCheck1[]" <?php $hee = $result['sm_id']; if($hee > 0){ ?> style="display:none" <?php } ?>  value="<?php echo $result['monk_id']; ?>" ></td>                  
                    </div>               
                      </div>         
                       <?php
                   } ?>


                    </form>
                </div>


</div>
<!-- End of Main Content -->

    

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>./Sathu/dashboard/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>./Sathu/dashboard/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url();?>./Sathu/dashboard/js/demo/chart-pie-demo.js"></script>

    <!--input -->
    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>./Sathu/input/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url();?>./Sathu/input/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>./Sathu/input/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>./Sathu/input/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>./Sathu/input/js/global.js"></script> <!--input -->

</body>

</html>
