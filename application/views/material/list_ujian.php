<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Daftar Ujian - MPK 24
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo site_url(); ?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo site_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          MPK 24
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="<?php echo base_url('home'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="#">
              <i class="material-icons">library_books</i>
              <p>Daftar Ujian</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Daftar Ujian</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <div class="navbar-wrapper">
            <a class="navbar-brand">Logged: <?php echo $this->session->userdata('username'); ?></a>
            <a href="<?=base_url('logout'); ?>"><button type="button" class="btn btn-danger">Logout</button></a>
          </div>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <h3 class="title">Daftar Ujian</h3>
          <p>
          </p>
          <div class="row">
            <?php if(isset($messages)) { ?>
              <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                  <?php echo $messages; ?>
                </div>
              </div>
            <?php } ?>

            <?php
            if($list_exam == FALSE) { ?>
              <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                  Tidak ada Ujian
                </div>
              </div>
            <?php } else {
            foreach ($list_exam as $list) { ?>
              <div class="col-md-4">
                <div class="card card-chart">
                  <div class="card-header card-header-success">
                    <h4 class="card-title">Ujian <?=$list->tipe; ?></h4>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Title: <?=$list->title; ?></h4>
                    <p class="card-category"> 
                      <?php
                      if($list->tipe == 1) {
                        if($checkExam1 != NULL) {
                          echo '<span class="text-success"><i class="material-icons">info</i> Status: </span> Anda telah mengerjakan';
                        } else {
                          echo '<span class="text-warning"><i class="material-icons">info</i> Status: </span> Anda belum mengerjakan';
                        }
                      } else if($list->tipe == 2) {
                        if($checkExam2 != NULL) {
                          echo '<span class="text-success"><i class="material-icons">info</i> Status: </span> Anda telah mengerjakan';
                        } else {
                          echo '<span class="text-warning"><i class="material-icons">info</i> Status: </span> Anda belum mengerjakan';
                        }
                      } else if($list->tipe == 3) {
                        if($checkExam3 != NULL) {
                          echo '<span class="text-success"><i class="material-icons">info</i> Status: </span> Anda telah mengerjakan';
                        } else {
                          echo '<span class="text-warning"><i class="material-icons">info</i> Status: </span> Anda belum mengerjakan';
                        }
                      } else if($list->tipe == 4) {
                        if($checkExam4 != NULL) {
                          echo '<span class="text-success"><i class="material-icons">info</i> Status: </span> Anda telah mengerjakan';
                        } else {
                          echo '<span class="text-warning"><i class="material-icons">info</i> Status: </span> Anda belum mengerjakan';
                        }
                      } else if($list->tipe == 5) {
                        if($checkExam5 != NULL) {
                          echo '<span class="text-success"><i class="material-icons">info</i> Status: </span> Anda telah mengerjakan';
                        } else {
                          echo '<span class="text-warning"><i class="material-icons">info</i> Status: </span> Anda belum mengerjakan';
                        }
                      } else {
                        echo '<span class="text-success"><i class="material-icons">info</i> Status: </span> Tidak diketahui';
                      }
                      ?>
                      </p>
                      <hr />
                      <a href="<?=base_url('ujian/do/'.$list->tipe); ?>"><button type="button" class="btn btn-danger">Kerjakan</button></a>
                      </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> <?=$list->created_at; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php } } ?>

          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://sman24bandung.sch.id">
                  SMAN 24 Bandung
                </a>
              </li>
              <li>
                <a href="#">
                  About MPK
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Developed with <i class="material-icons">favorite</i> by
            <a href="https://wajisobri.me" target="_blank">Wajisobri.me (OneHunter)</a> for MPK 24
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?=base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?=base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url(); ?>assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?=base_url(); ?>assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>