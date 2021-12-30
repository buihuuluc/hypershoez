<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/shoeZ/home">
            <img src="/shoez/public/images/logohypershoez.png" class="logo-top" alt="">
        </a>
        <div class="desk-menu collapse navbar-collapse justify-content-md-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/shoeZ/home">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shoeZ/product">BỘ SƯU TẬP</a>
                </li>
                <li class="nav-item lisanpham">
                    <a class="nav-link" href="/shoeZ/product">SẢN PHẨM
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul class="sub_menu">
                        <li class="">
                            <a href="/shoez/product/type/A01" title="Sản phẩm - Style 1">
                                Adidas
                            </a>
                        </li>
                        <li class="">
                            <a href="/shoez/product/type/C02" title="Sản phẩm - Style 1">
                                Converse x Off-White
                            </a>
                        </li>
                        <li class="">
                            <a href="/shoez/product/type/C03" title="Sản phẩm - Style 2">
                                Nike x Javis Scott
                            </a>
                        </li>
                        <li class="">
                            <a href="/shoez/product/type/N01" title="Sản phẩm - Style 2">
                                Nike
                            </a>
                        </li>
                        <li class="">
                            <a href="/shoez/product/type/O01" title="Sản phẩm - Style 3">
                                Off White
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shoez/introduce">GIỚI THIỆU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">LIÊN HỆ</a>
                </li>
            </ul>
        </div>
        <div id="offcanvas-flip1" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar" style="background: white;
        width: 100%;">

                <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>
                <h3 style="font-size: 14px;
          color: #272727;
          text-transform: uppercase;
          margin: 3px 0 30px 0;
          font-weight: 500; letter-spacing: 2px;">MENU</h3>
                <div class="justify-content-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Product">BỘ SƯU TẬP</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle aaaa" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <p>SẢN PHẨM</p>
                                <i class="fa fa-angle-double-right"></i>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:0;">
                                <a class="dropdown-item" href="/shoez/product/type/A01"
                                    title="Sản phẩm - Style 1">Adidas</a>
                                <a class="dropdown-item" href="/shoez/product/type/C03"
                                    title="Sản phẩm - Style 2">Jordan</a>
                                <a class="dropdown-item" href="/shoez/product/type/C02"
                                    title="Sản phẩm - Style 3">Converse</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="introduce">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar" style="    background: white;
            width: 350px;">

                <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>

                <h3 style="font-size: 14px;
                color: #272727;
                text-transform: uppercase;
                margin: 3px 0 30px 0;
                font-weight: 500; letter-spacing: 2px;">Tìm kiếm</h3>
                <div class="search-box wpo-wrapper-search">
                    <form action="search" class="searchform searchform-categoris ultimate-search">
                        <div class="wpo-search-inner" style="display:inline">
                            <input type="hidden" name="type" value="product">
                            <input required="" id="inputSearchAuto" name="q" maxlength="40" autocomplete="off"
                                class="searchinput input-search search-input" type="text" size="20"
                                placeholder="Tìm kiếm sản phẩm...">
                        </div>
                        <button type="submit" class="btn-search btn" id="search-header-btn">
                            <i style="font-weight:bold" class="fas fa-search"></i>
                        </button>
                    </form>
                    <div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
                        <div class="resultsContent"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="offcanvas-flip2" uk-offcanvas="flip: true; overlay: true">
            <div class="uk-offcanvas-bar" style="background: white; width: 350px;">
                <button class="uk-offcanvas-close" style="color:#272727" type="button" uk-close></button>

                <h3 style="font-size: 14px;color: #272727;text-transform: uppercase;margin: 3px 0 30px 0;
              font-weight: 500; letter-spacing: 2px;">Giỏ hàng</h3>
                <div class="site-nav-container-last" style="color:#272727">
                    <div class="cart-view clearfix">
                        <table id="cart-view">
                            <tbody>
                                <?php
                                $Tong = 0;
                  if (!empty($product_cart)) {
                    foreach ( $product_cart  as $item) {
                      $maGiay = $item['id_product'];
                      $maLoai = $item['id_brand'];
                      $tenGiay = $item['ten'];
                      $giaBan = $item['gia'];
                      $Img = $item['image'];
                      $soLuong = $item['qty'];
                      $giaTong = $giaBan*$soLuong;
                      $giaTongFM = number_format($giaTong,0);
                      $Tong += $giaTong;
                      $product_navcart = <<<EOD
                      <tr class="item_1">
                      <td class="img"><a href="" title="Nike Air Max 90 Essential &quot;Grape&quot;"><img
                            src="/shoez/public/images/giay/anh1/$Img" alt="/products/nike-air-max-90-essential-grape"></a></td>
                      <td>
                        <a class="pro-title-view" style="color: #272727" href=""
                          title="$tenGiay &quot;Grape&quot;">$tenGiay</a>
                        <span class="variant">Tím / 36</span>
                        <span class="pro-quantity-view">$soLuong</span>
                        <span class="pro-price-view">$giaTongFM Vnđ</span>
                        <span class="remove_link remove-cart">
                          <a href="/shoez/cart/delete/$maGiay">
                            <i style="color: #272727;" class="fas fa-times"></i>
                          </a></span>
                      </td>
                      </tr>
                      EOD;
                      echo $product_navcart;
                    }
                  }
                
                ?>
                            </tbody>
                        </table>
                        <span class="line"></span>
        <table class="table-total">
            <tbody>
                <tr>
                    <td class="text-left">TỔNG TIỀN:</td>
                    <td class="text-right" id="total-view-cart"><?=number_format($Tong,0)?></td>
                </tr>
                <tr>
                    <td class="distance-td"><a href="" class="linktocart button dark">Xem giỏ hàng</a>
                    </td>
                    <td><a href="" class="linktocheckout button dark">Thanh toán</a></td>
                </tr>
            </tbody>
        </table>

         <a href="" target="_blank" class="button btn-check" style="text-decoration:none;">
          <span>Click nhận mã giảm giá ngay !</span>
         </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info">
            <span style="font-weight: 700;"><?=isset($usr) ?$usr['username'] :''?></span> <br>
            <a href="/shoez/home/logout"><span><?=isset($usr) ?'Đăng xuất' :''?></span></a>
        </div>

        <div class="icon-ol">
            <a style="color: #272727" href="/shoeZ/sigin">
                <i class="fas fa-user-alt"></i>
            </a>
            <a href="#" class="" uk-toggle="target: #offcanvas-flip">
                <i class="fas fa-search" style="color: black"></i>
            </a>

            <a style="color: #272727" href="#" uk-toggle="target: #offcanvas-flip2">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <button class="navbar-toggler" type="button" uk-toggle="target: #offcanvas-flip1" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    </div>
</nav>