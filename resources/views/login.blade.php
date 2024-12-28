<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KPU BANJARMASIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/tema/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/tema/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/tema/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/tema/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/tema/dist/css/skins/_all-skins.min.css">
  <!-- IziToast -->
  <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
  <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-info layout-top-nav" style="background: rgb(247,247,247);
background: radial-gradient(circle, rgba(247,247,247,1) 0%, rgb(242, 9, 9) 91%);">
  <div class="wrapper">
    <!-- Full Width Column -->
    <div class="content-wrapper" style="background: rgb(247,247,247);
background: radial-gradient(circle, rgba(247,247,247,1) 0%, rgb(240, 11, 11) 91%);">
      <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
              <div class="text-center">
                <img src="/background/logo.png" width="20%">
                <h1>KOMISI PEMILIHAN UMUM KOTA BANJARMASIN</h1>
              </div>
              <br /><br />
              <div class="box box-success" style="box-shadow: 0 8px 8px 0 rgba(0,0,0,.2);border-top-color:#fe0000">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">MONITORING PERJALANAN DINAS KPU KOTA BANJARMASIN</h3>

                </div>
                <form class="form-horizontal" method="post" action="/login">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Username</label>

                      <div class="col-sm-9">
                        <input type="username" class="form-control" placeholder="username" name="username"
                          value="{{old('username')}}" autocomplete="new-password" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Password</label>

                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Password" name="password"
                          value="{{old('password')}}" autocomplete="new-password" />
                      </div>
                    </div>
                  </div>
                  <div class="box-footer social-auth-links">
                    <button type="submit" class="btn btn-flat btn-danger btn-block" style=" color:white;"><i
                        class="fa fa-sign-in"></i> Masuk</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-3">
            </div>
          </div>

        </section>
        <!-- /.content -->
      </div>
      <!-- /.container -->
    </div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="/tema/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="/tema/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="/tema/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/tema/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/tema/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/tema/dist/js/demo.js"></script>
  <script type="text/javascript">
    @include('layouts.notif')
  </script>

</body>

</html>