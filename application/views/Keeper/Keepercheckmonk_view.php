<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Keeper</title>

  

   <!-- Custom fonts for this template -->
   <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>./Sathu/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
  <!-- <button type="button" class="btn btn-outline-primary">Primary</button> -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">สำรวจพระ</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center" role="row" class="info" bgcolor="#76D7C4">
                      <th tabindex="0" rowspan="1" colspan="1" style="width:20%;"><h6>ชื่อพระ</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:20%;"><h6>วัน/เดือน/ปี</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:25%;"><h6>สถานะ</h6></th>
                      
                      
                    </tr>
                  </thead>
                    <tbody>
                    <?php foreach ($list_monkcheck as $fab) { ?>
                   <tr role="row">
                   <?php 
                          $this->db->where('monk_id',$fab->monk_id);
                          $query = $this->db->get('tb_monk');
                          $data = $query->row_array();
                          ?>
                          <td align="center" ><?php echo $data['monk_name'];?></td>

                          <?php 
                             $var_date = $fab->mc_date;
                             $strDate = $var_date;
                             $strYear = date("Y",strtotime($strDate))+543;
                             $strMonth= date("n",strtotime($strDate));
                             $strDay= date("j",strtotime($strDate));
                             
                             $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรฎาคม","สิงหาคม","กันยายน","ตุลาคม",
                             "พฤศจิกายน","ธันวาคม");
                             $strMonthThai=$strMonthCut[$strMonth];
                                                
                            // echo $strDay." ".$strMonthThai." ".$strYear;
                           ?>
                                                        

                      <td align="center" ><?php echo $strDay." ".$strMonthThai." ".$strYear;?></td>
                     

                          <td align="center">
                                 <?php if($fab->mc_status == '1'){$dow ='&nbsp;&nbsp;รับ&nbsp;&nbsp;'; ?>
                                  
                                   <label  class="btn btn-success btn "><?php echo $dow;?></label>
                                   <?php }if($fab->mc_status == '2'){$dow ='ไม่รับ'; ?>
                                    <label class="btn btn-danger btn "><?php echo $dow;?></label>
                                  <?php } ?>
                                
                          </td>
                          
                   </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>





       

  </div>
  <!-- /.container-fluid -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                                
              <!-- Page Heading
              <h3 class="h3 mb-2 text-gray-800">สถิติ </h3> -->

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
              <div class="card-header py-3">
              
                <h6 class="m-0 font-weight-bold text-success">วันที่สำรวจพระ | จำนวนพระที่ลงชื่อรับกิจนิมนต์</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
              <tr>
              <tr role="row" align="center" class="info" bgcolor="#76D7C4" >
                          
                            <th tabindex="0" rowspan="1" colspan="1" style="width:20%;">ปีเดือนวัน</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width:20%;">จำนวน</th>
                          

              </thead>

              <tbody>
                  <?php foreach ($list_jubjub as $rs) { ?> 
                  
                      <tr role="row">
                      <?php 
                             $var_date = $rs->mc_date;
                             $strDate = $var_date;
                             $strYear = date("Y",strtotime($strDate))+543;
                             $strMonth= date("n",strtotime($strDate));
                             $strDay= date("j",strtotime($strDate));
                             
                             $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรฎาคม","สิงหาคม","กันยายน","ตุลาคม",
                             "พฤศจิกายน","ธันวาคม");
                             $strMonthThai=$strMonthCut[$strMonth];
                                                
                            // echo $strDay." ".$strMonthThai." ".$strYear;
                           ?>
                      <td align="center"><?php echo $strDay." ".$strMonthThai." ".$strYear;?></td>
                      
                      <td align="center"><?php echo $rs->total;?></td>
                  </tr>
                  <?php  } ?>
              </tbody>
              </table>
              </div>
              </div>
              </div>

              </div>
              <!-- /.container-fluid -->

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

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>./Sathu/dashboard/js/demo/datatables-demo.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>   