<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>./Sathu/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>./Sathu/home/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>./Sathu/home/css/grayscale.min.css" rel="stylesheet">


    <!--input -->
    <!-- Icons font CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>./Sathu/input/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>./Sathu/intput/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>./Sathu/input/css/main.css" rel="stylesheet" media="all">  <!--input -->

    <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>./Sathu/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url();?>./Sathu/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  </head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">JONGMONK</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">วันสำคัญของวัด</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">สมัครสมาชิก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Login');?>">เข้าสู่ระบบ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase"> </h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5"> </h2>
        <!-- <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a> -->
      </div>
    </div>
  </header>

  
<!-- Projects Section -->
<section id="about" class="projects-section bg-light">
    <div class="container">
    
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary text-center">ตารางงานวันสำคัญของวัด</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr role="row" class="info" bgcolor="#CCCCCC">
                     
                      <th tabindex="0" rowspan="1" colspan="1" style="width:15%;"><h6>วันที่</h6></th>
                      <th tabindex="0" rowspan="1" colspan="1" style="width:20%;"><h6>ชื่อ</h6></th>
                      
                      <th tabindex="0" rowspan="1" colspan="1" style="width:30%;"><h6>รายละเอียด</h6></th>
                      
                      
                    </tr>
                  </thead>
                    <tbody>
                    <?php foreach ($list_daykeywat as $fab) { ?>
                   <tr role="row">
                      
                       <td>
                            <?php echo $fab->dkw_date;?>
                        </td>
                       <td>
                            <?php echo $fab->dkw_name;?>
                        </td>
                       
                       <td>
                            <?php echo $fab->dkw_detail;?>
                        </td>

                           
                   </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    </div>
  </section>
  

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">
    <div class="card-body">
                    <form action="<?php echo site_url('Homepage/CheckRegister'); ?>" method="POST">
                      <h1 class="mx-auto my-0 text-center">สมัครสมาชิก</h1>
                      <br>
                        <div class="form-row">
                            <div class="name">ชื่อผู้ใช้งาน</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="mem_username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">รหัสผ่าน</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="mem_password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ชื่อ</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="mem_name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">ที่อยู่</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="mem_address">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">เบอร์</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="mem_phone">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="name">ไลน์</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="mem_line">
                                </div>
                            </div>
                        </div> -->
                        
                        
                        <div>
                            <button class="btn btn--radius-2 btn-primary" type="submit">ยืนยัน</button>
                        </div>
                    </form>
                </div>

      

    </div>
  </section>

  <!-- Signup Section -->
  <!-- <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section> -->

  <!-- Contact Section -->
  <!-- <section id="contact" class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section> -->

  <!-- Footer -->
  <!-- <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>./Sathu/home/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>./Sathu/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url();?>./Sathu/home/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url();?>./Sathu/home/js/grayscale.min.js"></script>

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
