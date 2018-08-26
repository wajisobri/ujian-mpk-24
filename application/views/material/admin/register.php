<?php 
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Register - MPK 24
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo site_url(); ?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo site_url(); ?>assets/demo/demo.css" rel="stylesheet" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.6/dist/sweetalert2.all.min.js"></script>
    <script>
    function register() {
        const submit = swal.mixin({
          confirmButtonClass: 'btn btn-success',
          cancelButtonClass: 'btn btn-danger',
          buttonsStyling: false,
        })
    
        submit({
          title: 'Anda sudah yakin?',
          text: "Anda tidak bisa mengubah data user selain Admin!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Ya, Register!',
          cancelButtonText: 'Tidak, Batal!',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            $("#form-register").submit();
            submit(
              'Terkirim!',
              'User telah didaftarkan..',
              'success'
            )
            setTimeout(function(){window.top.location="http://wajisobri.me/register"} , 2000);
          } else if (
            // Read more about handling dismissals
            result.dismiss === swal.DismissReason.cancel
          ) {
            submit(
              'Dibatalkan',
              'User batal didaftarkan',
              'error'
            )
          }
        })
      }
    </script>
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
          <li class="nav-item active  ">
            <a class="nav-link" href="login.html">
              <i class="material-icons">dashboard</i>
              <p>Login</p>
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
            <a class="navbar-brand" href="#pablo">Register Page</a>
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Register Form</h4>
                  <p class="card-category"> Enter your account information below to Login</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="<?=base_url('register/auth'); ?>" name="form-register" id="form-register">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">Nama</label>
                                        <input type="username" class="form-control" name="nama" id="nama" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="username" class="form-control" name="username" id="username" placeholder="Your Username">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Username">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <button type="button" onclick="register()" class="btn btn-primary">Register</button>
                                </div>
                                <div class="col-md-12">
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">List User</h4>
                  <p class="card-category"> See all user below</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                        <form method="POST">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                      <thead class=" text-primary">
                                        <th>
                                          ID
                                        </th>
                                        <th>
                                          Nama
                                        </th>
                                        <th>
                                          Username
                                        </th>
                                        <th>
                                          Password
                                        </th>
                                      </thead>
                                      <tbody>
                                        <?php
                                        $i = 1;
                                        foreach($getAllUser as $list) { ?>
                                        <tr>
                                          <td>
                                            <?=$i; ?>
                                          </td>
                                          <td>
                                            <?=$list->name; ?>
                                          </td>
                                          <td>
                                            <?=$list->username; ?>
                                          </td>
                                          <td>
                                            <?=$list->password; ?>
                                          </td>
                                        </tr>
                                        <?php $i++; } ?>
                                      </tbody>
                                    </table>
                                  </div>
                            </div>
                        </form>
                      </div>
                    </div>
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
                <a href="https://sman24bandung.sch.id">
                  SMAN 24 Bandung
                </a>
              </li>
              <li>
                <a href="about.html">
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
            <a href="https://wajisobri.me" target="_blank">Wajisobri.me (OneHunter)</a> for MPK 24.
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
  <!-- Chartist JS -->
  <script src="<?php echo site_url(); ?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo site_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo site_url(); ?>assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo site_url(); ?>assets/demo/demo.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
</body>

</html>