  <!--Content-->
  <div class="content">
    <section class="signup">
        <div class="container">
            <div class="signin-left">
                <div class="sign-title text-center">
                    <h1>Đăng Ký <br> Tài Khoản Thành Viên</h1>
                </div>
            </div>
            <div class="signin-right ">
                <form action="/shoez/sigup/register" method="POST">
                    <div class="firstname form-control1 ">
                        <input type="text" name="name" required placeholder="Họ Tên">
                    </div>
                    <div class="address form-control1 ">
                        <input type="text"   name="address" required placeholder="Địa Chỉ">
                    </div>
                    
                    <div class="phone form-control1">
                        <input type="tel"  name="phone" required placeholder="Số điện thoại">
                    </div>

                    <div class="email form-control1">
                        <input type="email"  name="email" required placeholder="Email">
                    </div>
                    
                    <div class="username form-control1">
                        <input type="text"  name="username" id="username" required placeholder="Username">
                    </div>

                    <div class="password form-control1">
                        <input type="password"  name="password" required placeholder="Password">
                    </div>
                    
                    <div class="recaptcha form-control1">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</div>

                    

                    <button class="submit" type="submit" name="btnSigup">
                        <p>Đăng ký</p>
                    </button>
                    
                    <?php 
                    if (isset($data['msg'])) { 
                        if ($data['msg']) {

                           echo '<h3 style="color: green;">Đăng Ký Thành Công</h3>';

                        }else{

                            echo '<h3 style="color: red;">Đăng Ký Thất Bại</h3>';

                        }
                       
                     } 
                     ?>

                    <div class="backto">
                      <a href="/shoeZ/home"><i class="fa fa-long-arrow-alt-left"></i> Quay lại trang chủ</a>
                    </div>
                    <!-- <div class="submit">
                      <p>Đăng kí</p>
                    </div> -->
                    
                    <!-- <div class="sex form-control1">
                       <div class="female">
                         
                          <input type="radio" id="female" checked  name="sex">
                          <label for="female">Nữ</label>
                       </div>
                       <div class="male">
                            <input type="radio" id="male"  name="sex">
                            <label for="male" >Nam</label>
                        </div>
                    </div> -->

                    <!-- <div class="birthday form-control1">
                        <input type="text" id="birthday" placeholder="mm/dd/yyyy">
                    </div> -->
                </form>
            </div>
        </div>
    </section>
</div>    
    