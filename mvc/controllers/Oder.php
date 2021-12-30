<?php
    class Oder extends Controller{
    
    public $UserModel;    
    public $CheckOutModel;

    public function __construct() {
        $this->CheckOutModel = $this->getModel('CheckOutModel');
        $this->UserModel = $this->getModel('UserModel');
    }
        
    
    public function Show()
        {
            $this ->getView('master1', [
                'Page'=>'sigup'
            ]);
        }
    
    public function Checkout()
        {
            //  Lấy dữ liệu từ form người dùng nhập
            
                
                
                
                $usr = $this->UserModel->ValidateToken();
                if ($usr != null) {
                    if (isset($_POST['checkout'])) {
                        $userNameout = $_POST['username'];
                        $addressout = $_POST['address'];
                        $emailout = $_POST['email'];
                        $phoneout = $_POST['phone'];    
                        $Tong = $_SESSION['tong'];
                        // Insert vào DB
                        $result = $this->CheckOutModel->InsertCheckout( $userNameout, $addressout,  $emailout,  $phoneout, $Tong );
                        //Lấy dữ liệu mới nhất
                        $rq = $this->CheckOutModel->getIdNew();
                        $hoadons = $_SESSION['id_hoadon'];
                        var_dump($hoadons);
                        $hoadon = '';
                        foreach ($hoadons as $item) {
                            $hoadon =  $item['id_hoadon'] + 1;
                        }
                        //Lấy dữ liệu hóa đơn
                        $dataHD = $this->CheckOutModel->getHoaDon($hoadon);
                            // Show Thành Công hay Thất Bại
                                $this ->getView('master1', [
                                    'Page'=>'checkout',
                                    'checkout'=>$result,
                                    'user'=>$usr,
                                    'showcheckout'=>$rq,
                                    'datahoadon'=> $dataHD
                                ]);
                            }

                }else{
                    $this ->getView('master1', [
                        'Page'=>'cart',
                       
                    ]);
                    echo '<script language="javascript">alert("Hãy đăng nhập để đặt hàng"); window.location="/shoeZ/cart";</script>';
                  
                }

                
            

        }

        
    }
  
?>
