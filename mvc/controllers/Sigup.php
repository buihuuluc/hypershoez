<?php
    class Sigup extends Controller{

        public $UserModel;

        public function __construct() {
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show()
        {
            $this ->getView('master1', [
                'Page'=>'sigup'
            ]);
        }

        public function Register()
        {
            //  Lấy dữ liệu từ form người dùng nhập
            if (isset($_POST['btnSigup'])) {
                $name = $_POST['name'];
                $password = $_POST['password'];
                $password = password_hash($password, PASSWORD_DEFAULT);
                $username = $_POST['username'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
            
                // Insert vào DB
                $rs = $this->UserModel->AuthenSigup($username, $password, $name, $email, $address, $phone);

                // Show Thành Công hay Thất Bại
                if ($rs) {
                    $this ->getView('master1', [
                        'Page'=>'sigin',
                        'msg'=>$rs
                    ]);
                }else{
                    $this ->getView('master1', [
                        'Page'=>'sigup',
                        'msg'=>$rs
                    ]);
                }
            }
        }

    }
?>