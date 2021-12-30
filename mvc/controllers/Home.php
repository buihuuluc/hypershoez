<?php
    class Home extends Controller{

        
        public $ProductModel;
        public $UserModel;

        public function __construct() {
            //Load Model
            $this->ProductModel = $this->getModel('ProductModel');
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show()
        {
            //Data
            $Product_8 = $this->ProductModel->getRDProduct_8();
            $Product_10 = $this->ProductModel->getRDProduct_10();

            $usr = $this->UserModel->ValidateToken();
            if ($usr != false) {
                $this ->getView('master1', [
                    'Page'=>'homepage',
                    'user'=>$usr,
                    'Product_8'=>$Product_8,
                    'Product_10'=>$Product_10
                    
                ]);
            }else{
                $this ->getView('master1', [
                    'Page'=>'homepage',
                    'Product_8'=>$Product_8,
                    'Product_10'=>$Product_10
                    
                ]);
            }
            
        }

        public function Login()
        {
            $authen = false;
            //  Lấy dữ liệu từ form người dùng nhập
            if (isset($_POST['btnSigin'])) {

                $userName = $_POST['username'];
                $password = $_POST['password'];

                $authen = $this->UserModel->AuthenSigin($userName, $password);
                
            }

            $usr = $this->UserModel->ValidateToken();
            if ($usr != false) {
                $this->Show();
            }else{
                $this->getView('master1', [
                    'Page'=>'sigin',
                    'status'=>$authen
                ]);
            }
            
            
            
        }

        public function Logout()
        {
            if (isset($_COOKIE['token_usr'])) {
                $token = $_COOKIE['token_usr'];
                $sql = "UPDATE user SET token = '' WHERE token = '$token'";
                mysqli_query($this->UserModel->conn, $sql);
            }
            setcookie('token', '', time()-7*24*60*60, '/');

            $this->Show();
        }

    }
?>