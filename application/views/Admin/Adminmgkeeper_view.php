<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  

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
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
  <a class="nav-link" href="<?php echo site_url('Admin/Admindash');?>">
    <i class="fas fa-fw fa-home"></i>
    <span>หน้าหลัก</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo site_url('Admin/Adminmgkeeper');?>">
    <i class="fas fa-fw fa-table"></i>
    <span>ผู้ดูแลวัด</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo site_url('Admin/Adminmgwardencentral');?>">
    <i class="fas fa-fw fa-table"></i>
    <span>ผู้ดูแลคลังส่วนกลาง</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo site_url('Admin/Adminmgwardenarea');?>">
    <i class="fas fa-fw fa-table"></i>
    <span>ผู้ดูแลคลังฌาปนสถาน</span></a>
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
              <h4 class="m-0 font-weight-bold text-primary">ตารางข้อมูลผู้ดูแลวัด<a type="button" class="btn btn-outline-primary" href="<?php echo site_url('Admin/Adminaddkeeper');?>">เพิ่มผูู้ดูแลวัด</a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr role="row" class="info" bgcolor="#76D7C4">
                      <th tabindex="0" rowspan="1" colspan="1" style="width:5%;"><h6>รหัส</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:20%;"><h6>ชื่อผู้ใช้งาน / รหัสผ่าน</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:25%;"><h6>ชื่อ / ที่อยู่</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:20%;"><h6>เบอร์</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:15%;"><h6>สิทธิ์</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:5%;"><h6>แก้ไข</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:5%;"><h6>ลบ</h6></th>
                      
                    </tr>
                  </thead>
                    <tbody>
                    <?php foreach ($list_keeper as $fab) { ?>
                   <tr role="row">
                       <td align="center"> <?php echo $fab->mem_id;?></td>
                       <td>
                            ชื่อผู้ใช้งาน : <?php echo $fab->mem_username;?>
                            <br>
                            รหัสผ่าน : <?php echo $fab->mem_password;?></td>
                       <td>
                            ชื่อ : <?php echo $fab->mem_name;?>
                            <br>
                            ที่อยู่ : <?php echo $fab->mem_address;?></td>
                       <td>
                            เบอร์ : <?php echo $fab->mem_phone;?>
                          </td>
                            <?php 
                                          if($fab->level_id === '2')
                                          {
                                            $dow ='ผู้ดูแลวัด';
                                          }
                                          
                                           ?>
                        <td>
                            สิทธิ์ : <?php echo $dow;?>
                           </td>

                            <td>
                                <a href="<?php echo site_url('Admin/Admineditkeeper/'.$fab->mem_id);?>" 
                                class="btn btn-warning"> <i>แก้ไข</i></a>
                          </td>
                          <td>
                              <a href="<?php echo site_url('Admin/deletekeeper/'.$fab->mem_id);?>" 
                                class="btn btn-danger" > <i>ลบ</i></a>
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
