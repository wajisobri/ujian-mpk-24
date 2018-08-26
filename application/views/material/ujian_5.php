<?php
if(!empty(get_cookie('startTime'))){
  $telah_berlalu = time() - get_cookie('startTime');
} else {
  set_cookie('startTime', time(), 9800);
  $telah_berlalu = 0;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ujian 5
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo site_url(); ?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo site_url(); ?>assets/demo/demo.css" rel="stylesheet" />
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>
  tinymce.init({
    selector:'textarea',
    plugins: "wordcount",
    wordcount_cleanregex: /[0-9.(),;:!?%#$?\x27\x22_+=\\\/\-]*/g 
  });
  </script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.6/dist/sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="<?=base_url(); ?>assets/js/swal.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          MPK 24
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="<?=base_url('home'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Home</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Ujian 5</a>
            <a href="<?=base_url('logout'); ?>"><button type="button" href="<?=base_url('logout'); ?>" class="btn btn-danger">Logout</button></a>
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
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Membuat Essai</h4>
                  <p class="card-category">Isi Form dibawah</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="<?=base_url('ujian/submit/5'); ?>" id="form-ujian" name="form-esai">
                    <h5 class="card-category text-black" style="font-weight: bold;">
                      <?=$listExam->tema; ?>
                    </h5>
                    <div class="form-group">
                      <textarea class="form-control" id="essai" name="essai"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="button" onclick="submitAnswer()" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card card-profile">
                <div class="card-body">
                  <h6 class="card-category text-gray">Minimal Jumlah Kata</h6>
                  <h4 class="card-title"><?=$listExam->min_word; ?></h4>
                  <hr />
                  <h6 class="card-category text-gray">Waktu</h6>
                  <h4 class="card-title"><span id="timer">30 Menit</span></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="">
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
            <a href="https://wajisobri.me" target="_blank">Wajisobri.me</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo site_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo site_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo site_url(); ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo site_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo site_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo site_url(); ?>assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo site_url(); ?>assets/demo/demo.js"></script>
</body>

</html>