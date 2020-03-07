<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jom</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Custom styles for this template-->
  
  <link href="<?php echo base_url();?>./Sathu/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

   <!-- Custom styles for this page -->
   <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!--input -->
    <!-- Icons font CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>./Sathu/input/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <!-- <link href="<?php echo base_url();?>./Sathu/intput/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/css/main.css" rel="stylesheet" media="all">  <!--input -->

    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>./Sathu/datetime/js/jquery.min.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

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
        <a class="nav-link" href="<?php echo site_url('Jom/Jomdash');?>">
          <i class="fas fa-fw fa-home"></i>
          <span>หน้าหลัก</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Jom/Jomeditprofile');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>ข้อมูลส่วนตัว</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Jom/Jomshowbooking');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>จองนิมนต์พระ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('...');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>....</span></a>
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
              <h4 class="m-0 font-weight-bold text-primary">นิมนต์พระ</h4>
            </div>
  </div>
  <!-- /.container-fluid -->

  <div class="card-body">
                    <form action="<?php echo site_url('Jom/Jomaddbooking1/'); ?>" method="POST">

                    <div class="form-row">
                            <div class="name">ประเภทงาน</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="form-control" id="type_id" name="type_id" required>
                                        <option  value="">เลือกงาน</option>
                                            <?php 
                                                foreach ($query as $row)
                                            {?>
                                            <option  value="<?php echo $row->type_id; ?>"><?php echo $row->type_name; ?></option>
                                            <?php
                                            }?>
                                          
                                          </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">จำนวนพระ</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select  class="form-control" id="am_id" name="am_id" required>
                                        <option value="">เลือกจำนวน</option>
                                           
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                
                    
                        <div class="form-row">
                            <div class="name">วันเดือนปี</div>
                            <div class="value">
                                <div class="input-group">
                                    <input type="date" id="datetimepicker" class="form-control" name="bk_date" value="" required>
                                </div>
                            </div>
                        </div>
                      

                        <div class="form-row">
                            <div class="name">เวลางาน</div>
                            <div class="value">
                                <div class="form-group">
                                  <input class="form-control" name="bk_timejob" id="bk_timejob"required style="width:150px;">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">เวลามารับพระ</div>
                            <div class="value">
                                <div class="form-group">
                                    <input class="form-control" id="rantime"  name="bk_time" required style="width:150px;">
                                </div>
                            </div>
                        </div>

                        
                        
                        <div class="form-row">
                            <div class="name">สถานที่</div>
                            <div class="value">
                                <div class="form-group">
                                    <textarea class="form-control" type="text" name="bk_location" required style="width:900px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="mem_id"   value="<?php echo $this->session->userdata('mem_id');?>">
                        <input type="hidden" name="sj_id"   value="1"> <!--1 คือรอดำเนินการ-->
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">ยืนยัน</button>
                            
                        </div>
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





  




  <!-- Bootstrap core JavaScript-->
 
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    // $(document).ready(function() {
        // $('#datetimepicker').datetimepicker();
        
    // });
    // $('#oo').datetimepicker({
    //  format:'Y-m-d',
    //  timepicker:false,
    //  minDate:'-1970/01/01', //yesterday is minimum date
    //  maxDate:'+1970/01/03' //tomorrow is maximum date
    //});
</script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>./Sathu/dashboard/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>./Sathu/dashboard/js/demo/datatables-demo.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>./Sathu/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>


 
  
</body>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./Sathu/datetime/css/jquery.datetimepicker.min.css"/>
<script src="<?php echo base_url();?>./Sathu/datetime/js/jquery.datetimepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
</html>
<script>
    
    $(document).ready(function () {
        $('#type_id').change(function () {
            var type_id = $('#type_id').val();
            if (type_id != '') {
                $.ajax({
                    url: "<?php echo base_url(); ?>Jom/fetcham",
                    method: "POST",
                    data: { type_id: type_id },
                    success: function (data) {
                        $('#am_id').html(data);
                    }
                });
            }
            else {
                $('#am_id').html('<option value="">เลือกจำนวน</option>');
            }
        });
    });
</script>
<script type="text/javascript">
   jQuery('#bk_timejob').datetimepicker({
  datepicker:false,
  format:'H:i'
});
</script>
<script>
var j = 0;
var dateend = 0;
$('#bk_timejob').change(function(){
    j = document.getElementById("bk_timejob").value; 
    dateend = moment(j, 'H:i');
    console.log( dateend.format('h:mm').toString())
      var ga = dateend.format('h:mm').toString();
      //var go = (dateend).add(4,'days').format('h:mm').toString();
          jQuery('#rantime').datetimepicker({
            format:'H:i',
            onShow:function( ct ){
            this.setOptions({
              minTime:'05:00',
              maxTime: ga,
            }) //.val(), 10)
            },
            datepicker:false
          });
  });
</script>
