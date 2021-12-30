<?php
    if (isset($data['msg'])) {

      $dt = $data['msg'];
      if (!empty($dt)) {
        echo '<div class="alert alert-danger" style="text-align:center;">
            <strong>'.$dt.'</strong> Vui lòng kiểm tra lại !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
         </div>';
      }
      
    }
    if (isset($data['rs'])) {

      var_dump($data['rs']);
      
    }
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - Manager</title>

    <!-- Bootstrap -->
    <link href="/shoez/public_admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/shoez/public_admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/shoez/public_admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/shoez/public_admin/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/shoez/public_admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="/shoeZ/admin/login" method="POST">
              <div>
                <h1><img style="width:90%;" src="/shoez/public/images/logohypershoez.png" class="logo-top" alt=""></h1>
              </div>
              <h1>Login Form - Admin</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <!-- <a class="btn btn-default submit">Log in</a> -->
                <input type="submit" class="btn btn-default submit" value="Đăng Nhập" name="btnAdSigin">
                <a class="reset_pass" href="#">Quên mật khẩu?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Chưa có tài khoản?
                  <a href="#signup" class="to_register"> Đăng ký Admin </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="/shoeZ/admin/register" method="POST">
              <div>
                <h1><img style="width:90%;" src="/shoez/public/images/logohypershoez.png" class="logo-top" alt=""></h1>
              </div>
              <h1>Create Account</h1>
              <div>
                <input type="email" class="form-control" name ="admail" placeholder="Email" required="" />
              </div>

              <div>
                <input type="text" class="form-control" name ="adusername" placeholder="Username" required="" />
              </div>
              
              <div>
                <input type="password" class="form-control" name ="adpassword" placeholder="Password" required="" />
              </div>

              <select class="form-control" name="level" id="">
                <option value="">Chọn chức vụ</option>
                <option value="0">Quản Lý</option>
                <option value="1">Quản Trị Viên</option>
                <option value="2">Quản Lý Bài Viết</option>
              </select>

              <div>
                <input type="submit" class="btn btn-default submit" value="Đăng Ký" name="btnAdSigup">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Bạn đã có tài khoản ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
