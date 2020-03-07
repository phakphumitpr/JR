<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Keeper</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
              <h4 class="m-0 font-weight-bold text-primary">เพิ่มงานวันสำคัญ</h4>
            </div>
  </div>
  <!-- /.container-fluid -->

  <div class="card-body">
                    <form action="<?php echo site_url('Keeper/CheckKeeperadddaykeywat'); ?>" method="POST">
                      
                        <div class="form-row">
                            <div class="name">ชื่อ</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="dkw_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">วันเดือนปี</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="date" id="datetimepicker" name="dkw_date">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">รายละเอียด</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="form-control" type="text" name="dkw_detail"></textarea>
                                </div>
                            </div>
                        </div>
                 
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">ยืนยัน</button>
                        </div>
                    </form>
                </div>


</div>
<!-- End of Main Content -->
<script>$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#datetimepicker').attr('min', maxDate);
});</script>
    
    

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
