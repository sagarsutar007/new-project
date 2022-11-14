
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= ADMINASSETS . 'css/all.css'; ?>">
  <link rel="stylesheet" href="<?= ADMINASSETS . 'css/sharp-solid.css'; ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= ADMINASSETS . 'plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= ADMINASSETS . 'css/adminlte.min.css'; ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= BASEURL; ?>"><b>Sign In</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Welcome to your application!</p>

      <form action="<?= BASEURL . 'login-user'; ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" id="input-username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-sharp fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="input-password">
          <div class="input-group-append">
            <div class="input-group-text" id="toggle-password">
              <span class="fas fa-sharp fa-eye"></span>
            </div>
          </div>
        </div>

        <?php if($this->session->flashdata('alert')!=''){ ?>
        <div class="row">
          <div class="col-12">
            <p class="text-center text-danger"><?= $this->session->flashdata('alert'); ?></p>
          </div>
        </div>
        <?php } ?>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <p class="mb-1">
          <a href="<?= base_url('forgot-password'); ?>">I forgot my password</a>
        </p>
        <!-- <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p> -->
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= ADMINASSETS . 'plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<!-- AdminLTE App -->
<script src="<?= ADMINASSETS . 'js/adminlte.min.js'; ?>"></script>

<script>
    $(function() {
        
        $(document).on('click', '#toggle-password', function(event) {
            
            if ($(this).find('span').hasClass('fa-eye')) {
                $(this).find('span').removeClass('fa-eye').addClass('fa-eye-slash');
                $("#input-password").attr('type','text');
            } else {
                $(this).find('span').removeClass('fa-eye-slash').addClass('fa-eye');
                $("#input-password").attr('type','password');
            }

        });

    });
</script>         
</body>
</html>
