<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ujian 3
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo site_url(); ?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo site_url(); ?>assets/demo/demo.css" rel="stylesheet" />
  <link href="<?php echo site_url(); ?>assets/css/smartwizard/smart_wizard.css" rel="stylesheet" />
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/js/smartwizard/jquery.smartWizard.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/js/swal.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.6/dist/sweetalert2.all.min.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          MPK 24
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.html">
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
            <a class="navbar-brand" href="#pablo">Ujian 3</a>
            <a href="<?=base_url('logout'); ?>"><button type="button" href="<?=base_url('logout'); ?>" class="btn btn-danger">Logout</button></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Soal Kepemimpinan</h4>
                  <p class="card-category">Isi Pertanyaan Disini</p>
                </div>
                <div class="card-body">
                  <form action="<?=base_url('ujian/submit/3'); ?>" name="form-ujian" id="form-ujian" method="POST" >

                  <?php
                  $i = 1;
                  foreach ($listExam as $list) { ?>
                    <h5 class="card-category text-black" style="font-weight: bold;">
                      <?php echo $i.". ".$list->pertanyaan; ?>
                    </h6>
                    <!-- Pilihan A -->
                    <div class="form-check">
                        <label class="form-check-label" style="color: black;">
                            <input onchange="localStorage.setItem('soal_3_<?=$i; ?>', 'a');" class="form-check-input" type="radio" name="soal_<?=$i; ?>" id="soal_<?=$i; ?>" value="a">
                            <?=$list->a; ?>
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <!-- Pilihan A -->
                    <div class="form-check">
                        <label class="form-check-label" style="color: black;">
                            <input onchange="localStorage.setItem('soal_3_<?=$i; ?>', 'b');" class="form-check-input" type="radio" name="soal_<?=$i; ?>" id="soal_<?=$i; ?>" value="b">
                            <?=$list->b; ?>
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <!-- Pilihan C -->
                    <div class="form-check">
                        <label class="form-check-label" style="color: black;">
                            <input onchange="localStorage.setItem('soal_3_<?=$i; ?>', 'c');" class="form-check-input" type="radio" name="soal_<?=$i; ?>" id="soal_<?=$i; ?>" value="c" >
                            <?=$list->c; ?>
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <!-- Pilihan D -->
                    <div class="form-check">
                        <label class="form-check-label" style="color: black;">
                            <input onchange="localStorage.setItem('soal_3_<?=$i; ?>', 'd');" class="form-check-input" type="radio" name="soal_<?=$i; ?>" id="soal_<?=$i; ?>" value="d" >
                            <?=$list->d; ?>
                            <span class="circle">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <br />
                  <?php
                  $i++; } ?>

                  <div class="form-group">
                    <button type="button" onclick="submitAnswer()" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Waktu</h4>
                  <p class="card-category">18 Menit</p>
                </div>
                <div class="card-body" id="wizard">
                    <h6 class="card-category text-gray">Jawaban Saya Yang Tersimpan</h6>
                    <?php
                    $j = 1;
                    foreach($listExam as $exam) {
                        $answer = $j.". <script>document.write(localStorage.getItem('soal_3_".$j."'));</script><br />";
                        echo $answer;
                        $j++;
                    }
                    ?>
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
                <a href="">
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
            <a href="https://wajisobri.me" target="_blank">OneHunter</a> for MPK 24.
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