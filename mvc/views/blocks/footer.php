<?php
if(isset($_POST["dangki"])){
  $addressMail = $_POST["dangki"];
  print_r( $addressMail);
  require "mvc/core/PHPMailer/src/PHPMailer.php";  //nhúng thư viện vào để dùng, sửa lại đường dẫn cho đúng nếu bạn lưu vào chỗ khác
  require "mvc/core/PHPMailer/src/SMTP.php"; //nhúng thư viện vào để dùng
  require 'mvc/core/PHPMailer/src/Exception.php'; //nhúng thư viện vào để dùng
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
          try {
              $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
              $mail->isSMTP();  
              $mail->CharSet  = "utf-8";
              $mail->Host = 'smtp.gmail.com';  //SMTP servers
              $mail->SMTPAuth = true; // Enable authentication
          $nguoigui = 'trungtoxic7@gmail.com';
          $matkhau = 'bjpzqrdqrtrrvylz';
          $tennguoigui = 'HyperShoeZ';
              $mail->Username = $nguoigui; // SMTP username
              $mail->Password = $matkhau;   // SMTP password
              $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
              $mail->Port = 465;  // port to connect to                
              $mail->setFrom($nguoigui, $tennguoigui ); 
              $to = " $addressMail";
              
              $mail->addAddress($to ); //mail và tên người nhận  
              $mail->isHTML(true);  // Set email format to HTML
              $mail->Subject = 'Ưu Đãi cùng HyperShoeZ';      
              $noidungthu = "<b>Chào bạn!</b><br>Mã khuyến mãi của bạn là : <b>COLAMMOICOAN</b>" ;
              $mail->Body = $noidungthu;
              $mail->smtpConnect( array(
                  "ssl" => array(
                      "verify_peer" => false,
                      "verify_peer_name" => false,
                      "allow_self_signed" => true
                  )
              ));
            $mail->send();
          
              echo '<script language="javascript">alert("Mã khuyến mãi đã được gửi đến email của bạn"); window.location="";</script>';
        
          } catch (Exception $e) {
           echo 'Message could not be sent. Mailer Error';
          }
}
?>
<footer class="main-footer">
      <div class="container">
        <div class="">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-block">
                <h4 class="footer-title">
                  Giới thiệu
                </h4>
                <div class="footer-content">
                  <p>Hyper Shoe Z trang mua sắm trực tuyến của thương hiệu giày, thời trang nam, nữ, phụ kiện, giúp bạn
                    tiếp
                    cận xu hướng thời trang mới nhất.</p>
                  <div class="logo-footer">
                    <img src="/shoez/public/images/hypebeast-logo.png" alt="HypeBeast">
                  </div>
                  <div class="social-list">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-google"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-skype"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-link">
                <h4 class="footer-title">
                  PHÁP LÝ &amp; CÂU HỎI
                </h4>
                <div class="footer-content toggle-footer">
                  <ul>
                    <li class="item">
                      <a href="#" title="Tìm kiếm">Tìm kiếm</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Giới thiệu">Giới thiệu</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Chính sách đổi trả">Chính sách đổi trả</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                    </li>
                    <li class="item">
                      <a href="#" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-block">
                <h4 class="footer-title">
                  Thông tin liên hệ
                </h4>
                <div class="footer-content toggle-footer">
                  <ul>
                    <li><span>Địa chỉ:</span> Số 3 đường Lê Thị Riêng, Phường 5, TP.Cà Mau, Vietnam</li>
                    <li><span>Điện thoại:</span> +84 (029) 3997777</li>
                    <li><span>Fax:</span> +84 (029) 3997777</li>
                    <li><span>Mail:</span> contact@hypershoez.com</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="footer-col footer-block">
                <h4 class="footer-title">
                  FANPAGE
                </h4>
                <div class="footer-content">
                  <div id="fb-root">
                    <div class="footer-static-content">
                      <div class="fb-page" data-href="https://www.facebook.com/hypershoez"
                        data-tabs="timeline" data-width="" data-height="215" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/hypershoez"
                          class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/hypershoez">HyperShoeZ Viet Nam</a>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-footer--copyright">
        <div class="container">
          <hr>
          <div class="main-footer--border" style="text-align:center;padding-bottom: 15px;">
            <p>Copyright © 2021 <a href="https://www.facebook.com/hypershoez"> Hyper ShoeZ</a>. <a target="_blank"
                href="https://www.facebook.com/hypershoez">Powered by HyperShoeZ</a></p>
          </div>
        </div>
      </div>
</footer>