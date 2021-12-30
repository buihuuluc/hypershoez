<?php
  if (isset($data['user'])) {
    $usr = $data['user'];
    
  }

  if (!empty(isset($data['Dsgiay']))) {
    $dt = $data['Dsgiay'];
  }
  if (!empty(isset($data['ProductOF']))) {
    $dtof = $data['ProductOF'];
  }

if (isset($data['products'])) {
    
    $product = $data['products'];
    
    if(empty($_SESSION['cart']) || !array_key_exists($product['id_product'], $_SESSION['cart'])){
    $product['qty'] = 1;
      $_SESSION['cart'][$product['id_product']]=$product;
    }else{
      $product['qty'] =  $_SESSION['cart'][$product['id_product']]['qty'] + 1;
      $_SESSION['cart'][$product['id_product']] = $product;
    }
  }
  // để ngoài if
  if (!empty(isset($_SESSION['cart']))) {
    $product_cart =  $_SESSION['cart'];
  }

  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Nhúng CSS -> -->
  <link rel="stylesheet" href="/shoez/public/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/shoez/public/plugins/animate/animate.min.css">
  <link rel="stylesheet" href="/shoez/public/plugins/fontawesome/all.css">
  <link rel="stylesheet" href="/shoez/public/plugins/webfonts/font.css">
  <link rel="stylesheet" href="/shoez/public/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="/shoez/public/css/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="/shoez/public/css/style.css">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="/shoez/public/plugins/uikit/uikit.min.css" />
  <link rel="stylesheet" href="/shoez/public/css/sign.css">

  <!-- Style Local -->
  <link rel="stylesheet" type="text/css" href="/shoez/public/css/stylecart.css">
  <link rel="stylesheet" type="text/css" href="/shoez/public/css/stylecheckout.css">



  

  <title>Hyper - ShoeZ</title>
  <style>
    
  </style>

</head>

<body>

  <!-- Header -->
  <?php require_once "./mvc/views/blocks/header.php" ?>

  <!--Navbar-->
  <?php require_once "./mvc/views/blocks/navbar.php" ?>

  <!-- Content  -->
  <?php require_once "./mvc/views/pages/".$data['Page'].".php" ?>

  <!--gallery  -->
  <?php require_once "./mvc/views/blocks/gallery.php" ?>
  
  <!-- footer  -->
  <?php require_once "./mvc/views/blocks/footer.php" ?>


  <script async defer crossorigin="anonymous" src="/shoez/public/plugins/sdk.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="/shoez/public/plugins/bootstrap/popper.min.js"></script>
  <script src="/shoez/public/plugins/bootstrap/bootstrap.min.js"></script>
  <script src="/shoez/public/plugins/owl.carousel/owl.carousel.min.js"></script>
  <script src="/shoez/public/js/home.js"></script>
  <script src="/shoez/public/js/script.js"></script>
  <script src="/shoez/public/plugins/uikit/uikit.min.js"></script>
  <script src="/shoez/public/plugins/uikit/uikit-icons.min.js"></script>
  <script src="/shoez/public/js/main.js"></script>


  <!-- js Sign -->
  <script src="/shoez/public/js/sign.js"></script>

</body>

</html>
