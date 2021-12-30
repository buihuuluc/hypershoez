<?php

    if (isset($data['admin'])) {

      $adminDB = $data['admin'];
      
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
    <!-- iCheck -->
   <link href="/shoez/public_admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

   <!-- Style.css -->
   <link href="/shoez/public_admin/build/css/style.css" rel="stylesheet">
   <link href="/shoez/public_admin/build/css/soup.css" rel="stylesheet">


    <!-- bootstrap-daterangepicker -->
    <link href="/shoez/public_admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/shoez/public_admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> 
                <img style="width:90%;" src="/shoez/public/images/hypershoez.png" class="logo-top" alt="">
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://scontent-xsp1-3.xx.fbcdn.net/v/t1.6435-9/116433341_629761274312028_6016067166913846482_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=eEKSy8I8fo4AX_GUvSF&_nc_ht=scontent-xsp1-3.xx&oh=00_AT_KCvBXV9Oyon-k-j49meRZVpLTKaeQk4MtqSWe8fyrfw&oe=61E85501" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Chào Mừng,</span>
                <h2><?=$adminDB['admin_username']?></h2>
              </div>
            </div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/shoez/home">Trang Chủ</a></li>
                      <li><a href="/shoez/product">Sản Phẩm</a></li>
                      <li><a href="/shoez/blog">Tin Tức</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Quản Lý <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/shoez/admin/productmanager">Sản Phẩm</a></li>
                      <li><a href="/shoez/admin/order">Đơn Hàng</a></li>
                      <li><a href="/shoez/admin/staff">Nhân Viên</a></li>
                      <li><a href="/shoez/admin/usermanager">Khách Hàng</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Báo Cáo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Doanh Thu</a></li>
                      <li><a href="chartjs2.html">Nhân Viên</a></li>
                      <li><a href="morisjs.html">Hàng Hoá</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Tài Khoản <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Thông Tin</a></li>
                      <li><a href="tables_dynamic.html">Thoát</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="/shoez/public_admin/images/img.jpg" alt="">
                      <?=$adminDB['admin_username']?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="/shoez/admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/shoez/public_admin/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/shoez/public_admin/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/shoez/public_admin/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="/shoez/public_admin/images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content  ===================================================-->
        <div class="right_col" role="main">
          
        <?php require_once "./mvc/views/admin/".$data['page'].".php" ?>

        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="/shoez/public_admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="/shoez/public_admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/shoez/public_admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/shoez/public_admin/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="/shoez/public_admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Chart.js -->
    <script src="/shoez/public_admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="/shoez/public_admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="/shoez/public_admin/vendors/Flot/jquery.flot.js"></script>
    <script src="/shoez/public_admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/shoez/public_admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/shoez/public_admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/shoez/public_admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/shoez/public_admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/shoez/public_admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/shoez/public_admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/shoez/public_admin/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/shoez/public_admin/vendors/moment/min/moment.min.js"></script>
    <script src="/shoez/public_admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="/shoez/public_admin/build/js/custom.min.js"></script>

    <script src="/shoez/public_admin/build/js/main.js"></script>

    <!-- <script type="text/javascript">
      function deleteProduct(id) {
        // var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
        // if(!option) {
        //   return;
        // }

        console.log(id)
        //ajax - lenh post
        $.post('/shoez/admin/delete', {
          'id': id,
          'action': 'delete'
        }, function(data) {
          location.reload()
        })
      }
	  </script> -->


    
  </body>
</html>