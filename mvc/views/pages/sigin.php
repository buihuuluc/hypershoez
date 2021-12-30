<?php
    //MSG thông báo đăng ký
    if (isset($data['msg'])) {
        $kq = $data['msg'];
        if ($kq) {
            $alert = <<<EOD
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong class="text-center">Đăng Ký Thành Công ! Chúc mừng bạn trở thành hội viên của HyperShoeZ!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            EOD;    
            echo  $alert;
        }
    }
    if (isset($data['status'])) {
        $kq = $data['status'];
        if (!$kq) {
            $alert = <<<EOD
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong class="text-center">Sai tài khoản hoặc mật khẩu ! Vui lòng kiểm tra lại !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            EOD;    
            echo  $alert;
        }
    }
?>

<div class="content">
    <section class="signin ">
        <div class="container">
            <div class="signin-left">
                <div class="sign-title">
                    <h1>Đăng nhập</h1>
                </div>
            </div>
            <div class="signin-right " id="a-sign">
                <form action="/shoeZ/home/login" method="POST">
                    <div class="username form-control1 ">
                        <input type="text"   name="username" required  placeholder="UserName">
                    </div>
                    <div class="password form-control1">
                        <input type="password" name="password" required placeholder="Mật khẩu">
                        
                        <div class="error" style="position: absolute; bottom: 0;background: #fff; padding:10px; border:1px solid #ccc; color: red">
                          Please fill out this field 
                        </div>
                    </div>
                    <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
                    <div class="submit">

                        <input type="submit" value="Đăng Nhập" name="btnSigin">

                        <div class="forgetpassword">
                                <p id="quenmk">Quên mật khẩu?</p> hoặc <a href="./sigup">Đăng kí</a>
                        </div>
                       
                    </div>
                    
                </form>
            </div>
            <div class="signin-right " id="b-sign">
                <form action="">
                    <div class="username form-control1 ">
                       <h2>Phục hồi mật khẩu</h2>
                    </div>
                    <div class="password form-control1">
                        <input type="text" id="password" placeholder="Mật khẩu">
                    </div>
                 
                    <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>
                    <div class="submit">
                      <input class="btn" type="submit" value="Gửi">
                      <div class="forgetpassword">
                            <a href="" id="huy">Hủy</a>
                      </div>
                       
                    </div>
                    
                </form>
            </div>
        </div>
    </section>    
  </div>   