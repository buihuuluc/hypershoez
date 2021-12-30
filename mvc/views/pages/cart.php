<?php

$_SESSION['tong']= $Tong;

?>
 <!-- shopping cart area start -->
 <div class="shopping_cart_area">
        <div class="container">  
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Xóa</th>
                                            <th class="product_thumb">Hình ảnh</th>
                                            <th class="product_name">Sản phẩm</th>
                                            <th class="product-price">Giá </th>
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $Tong = 0;
                                      if (!empty($product_cart)) {
                                        foreach ($product_cart  as $item) {
                                            $tenGiay = $item['ten'];
                                            $giaGiay = $item['gia'];
                                            $giaGiayFM = number_format($item['gia'],0);
                                            $maLoai = $item['id_brand'];
                                            $maGiay = $item['id_product'];
                                            $Img = $item['image'];
                                            $soLuong = $item['qty'];
                                            $giaTong = $giaGiay*$soLuong;
                                            $giaTongFM = number_format($giaGiay*$soLuong, 0);
                                            $Tong += $giaTong;
                                            $cart_product = <<<EOD
                                            <tr>
                                            <td class="product_remove"><a href="/shoez/cart/delete/$maGiay"><i class="fa fa-trash-o">Xóa</i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="/shoez/public/images/giay/anh1/$Img" alt=""  height="10%" width="10%"></a></td>
                                            <td class="product_name"><a href="#">$tenGiay</a></td>
                                            <td class="product-price">$giaGiayFM</td>
                                            <td class="product_quantity"><a href="/shoeZ/cart/show/$maGiay"><input min="1" max="100" value="$soLuong" type="number"></a></td>
                                            <td class="product_total">$giaTongFM VNĐ</td>  
                                            </tr>
                                            EOD;    
    
                                            echo $cart_product;
                                        }
                                      }
                                    
                                    
                                      ?>
                                     
                                    </tbody>
                                    
                                </table>   
                            </div>  
                              
                        </div>
                    </div>
                </div>
                    
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">  
                                <h3>Thông tin đặt hàng</h3>
                                <div class="coupon_inner">   
                                    <form action="/shoeZ/oder/checkout" method="POST">
                                            <div class="firstname form-control1 ">
                                            Họ và Tên <br>
                                                <input type="text" name="username" required placeholder="Nhập Họ Tên">
                                            </div>
                                            <div class="address form-control1 ">
                                            Địa chỉ  <br>
                                                <input type="text"   name="address" required placeholder="Nhập Địa Chỉ">
                                            </div>
                                            <div class="email form-control1">
                                            Email <br>
                                                <input type="email"  name="email" required placeholder=" Nhập Email">
                                            </div>
                                            
                                            <div class="phone form-control1">
                                            Số điện thoại <br>
                                                <input type="text"  name="phone" id="phone" required placeholder="Nhập số điện thoại">
                                            </div>
            
                                            <div id="messageUn" class="form-control1"></div>
                                            
                                   
                              
                                      
                                    </div>    
                                    
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Tổng cộng</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Tổng giá</p>
                                       <p class="cart_amount"><?=number_format($Tong,0)?></p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Chiếc Khấu</p>
                                       <p class="cart_amount"><span>Flat Rate:</span> Free</p>
                                   </div>
                                   <a href="#">Calculate shipping</a>

                                   <div class="cart_subtotal">
                                       <p>Tổng Cộng:</p>
                                       <p class="cart_amount"><?=number_format($Tong,0)?></p>
                                   </div>
                                   <button class="checkout_btn" type="checkout" name="checkout">
                                        <p>Thanh Toán</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                                 
                        <?php 
                             if (isset($data['checkout'])) { 
                                if ($data['checkout']) {
                                echo '<h3 style="color: green;">Thanh toán thành công</h3>';

                            }else{

                                echo '<h3 style="color: red;">Thanh toán thất bại</h3>';

                                }
                                            
                            } 
                        ?>
             
                    </div>
                </div>
          
                <!--coupon code area end-->
        
                
         
        </div>     
    </div>
    <!-- shopping cart area end -->