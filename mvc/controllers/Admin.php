<?php
    class Admin extends Controller{

        
        public $AdminModel;
        public $UserModel;
        public $ProductModel;

        public function __construct() {
            $this->AdminModel = $this->getModel('AdminModel');
            $this->ProductModel = $this->getModel('ProductModel');
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show($view ='adAuthen', $msg ='')
        {
            $user = $this->AdminModel->ValidateToken();
            if ($user != null) {
                $this->ProductManager();
            }else{

                $this->getView($view,[
                    'msg'=>$msg
                ]);
            }
            
        }

        public function Login()
        {

            $user = $this->AdminModel->ValidateToken();
            if ($user != null) {
                $this->ProductManager();
            }else{

                if (isset($_POST['btnAdSigin'])) {
    
                    $userName = $_POST['username'];
                    $password = $_POST['password'];
    
                    $result = $this->AdminModel->AuthenSigin($userName, $password);
    
                    if ($result == false) {
                        //Nếu sai pass chuyển qua view này
                        $this->Show('adAuthen', 'Sai Mật Khẩu Hoặc Tài Khoản');
                    }else {

                        $this->ProductManager();
                    }
    
                }else{
                    $this->Show();
                }      
            }
            
            
        }


        public function Register()
        {
             //  Lấy dữ liệu từ form người dùng nhập
             if (isset($_POST['btnAdSigup'])) {

                $email = $_POST['admail'];
                $userName = $_POST['adusername'];
                $passWord = $_POST['adpassword'];
                $level = $_POST['level'];

                $passWord = password_hash($passWord, PASSWORD_DEFAULT);
            
                // Insert vào DB
                $rs = $this->AdminModel->AuthenSigup($userName, $passWord, $email, $level);

                if ($rs) {
                    // $this->Show('adAuthen', 'Đăng ký thành công!');
                    $this->getView('master2',[
                        'name'=>$userName,
                        'level'=>$level
                    ]);
                }else{
                    $this->Show('adAuthen', 'Tên người dùng đã tồn tại!');
                }
                
            }else{
                $this->Show();
            }
        }

        public function Logout()
        {
            if (isset($_COOKIE['token'])) {
                $token = $_COOKIE['token'];
                $sql = "UPDATE admin SET token = '' WHERE token = '$token'";
                mysqli_query($this->AdminModel->conn, $sql);
            }
            setcookie('token', '', time()-7*24*60*60, '/');
            $this->Show();
        }



        public function UserManager()
        {

            //Xử lý data 
             $UserModel = $this->UserModel->getAllUser();

            //Check đầu vào
            $admin = $this->AdminModel->ValidateToken();
            if ($admin != null) {
                $this->getView('master2',[

                    'page'=>'user',
                    'admin'=>$admin,
                    'userList'=>$UserModel,
                    
                ]);
            }else{
                $this->Show();
            }
        }

        

        public function ProductManager()
        {
            //Xử lý data 
            $Products = $this->ProductModel->getAllProduct();

            //Check đầu vào
            $admin = $this->AdminModel->ValidateToken();
            if ($admin != null) {
                $this->getView('master2',[

                    'page'=>'product',
                    'admin'=>$admin,
                    'product'=>$Products,
                    
                ]);
            }else{
                $this->Show();
            }
        }

        



        public function ProductEdit($maGiay = -1)
        {
            //Danh Sách Tất Cả Sản Phẩm
            $Products = $this->ProductModel->getAllProduct();

            //Bảng Show loại giày  -> Show danh mục loại giày
            $Brand = $this->ProductModel->getMaLoaiGiay();
            
            //Check User
            $admin = $this->AdminModel->ValidateToken();
            
            if ($admin != null) {

                if ($maGiay == -1) {
                    
                    $this->getView('master2',[
                        'page'=>'productEdit',
                        'admin'=>$admin,
                        'LoaiGiay'=>$Brand
                        // 'MaLoai'=> $DtMaLoai
                    ]);
                }else if($maGiay > 0){

                    $sql = "SELECT * FROM product WHERE id_product = '$maGiay'";
                    $Product_Edit = $this->ProductModel->ExecuteSigleQR($sql);
                    if ($Product_Edit != false) {
                        $this->getView('master2',[
                            'page'=>'productEdit',
                            'admin'=>$admin,
                            'LoaiGiay'=>$Brand,
                            'giayEdit'=>$Product_Edit
                        ]);
                    }
                    
                }
                $flag = false;
                if (!empty(isset($_POST['btnAdd']))) {
                    if (!empty(isset($_POST['LoaiGiay']))) {
                        $maLoai = $_POST['LoaiGiay'];
                        $tenGiay = $_POST['TenGiay'];
                        $giaBan = $_POST['GiaBan'];
                        $moTa = $_POST['MoTa'];
                        
                        if (!empty(isset($_FILES["fileToUpload"]))) {
                            $imgName = $_FILES["fileToUpload"]["name"];
                            $folder_path = './public/images/giay/anh1/';
                            $file_path = $folder_path.$_FILES['fileToUpload']['name'];
                            $flag = true;
                        }

                        if ($flag == true) {
                            $sql = "INSERT INTO product (id_product , ten, id_brand, image, description, gia)
                            VALUES (null ,'$tenGiay', '$maLoai', '$imgName', '$moTa', '$giaBan')";
                            $result = mysqli_query($this->AdminModel->conn, $sql);
                            if ($result == 1) {
                                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $file_path);
                            }
                        }
                    }
                }else if (!empty(isset($_POST['btnEdit']))) {

                    if (!empty(isset($_POST['LoaiGiay']))) {
                        $maLoai = $_POST['LoaiGiay'];
                        $tenGiay = $_POST['TenGiay'];
                        $giaBan = $_POST['GiaBan'];
                        $moTa = $_POST['MoTa'];
                        
                        if (!empty(isset($_FILES["fileToUpload"]))) {
                            $imgName = $_FILES["fileToUpload"]["name"];
                            $folder_path = './public/images/giay/anh1/';
                            $file_path = $folder_path.$_FILES['fileToUpload']['name'];
                            $flag = true;
                        }
                        

                        if ($flag == true) {
                            $sql = "UPDATE product SET ten = '$tenGiay', id_brand = '$maLoai', image = '$imgName',
                            description = '$moTa', gia ='$giaBan' WHERE id_product = $maGiay";
                            $result = mysqli_query($this->AdminModel->conn, $sql);
                            if ($result == 1) {
                                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $file_path);
                            }
                        }
                    }
                }

            }
        }

        public function UserEdit($id_user = -1)
        {
            //Danh Sách Tất Cả User
            $UserList = $this->UserModel->getAllUser();


            //Check User
            $admin = $this->AdminModel->ValidateToken();
            
            if ($admin != null) {

                if ($id_user == -1) {
                    
                    $this->getView('master2',[
                        'page'=>'userEdit',
                        'admin'=>$admin,
                    ]);
                }
                else if($id_user > 0){    

                    $sql = "SELECT * FROM user WHERE id_user = '$id_user'";
                    $User_Edit = $this->UserModel->ExecuteSigleQR($sql);
                    if ($User_Edit != false) {

                        $this->getView('master2',[
                            'page'=>'userEdit',
                            'admin'=>$admin,
                            'userEdit'=>$User_Edit
                        ]);
                    }
                }
                if (!empty(isset($_POST['btnUpdate']))) {

                    if (!empty(isset($_POST['id']))) {
                        $id_user = $_POST['id'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $hoten = $_POST['hoten'];
                        $email = $_POST['email'];
                        $diachi = $_POST['diachi'];
                        $phone = $_POST['phone'];

                        $sql = "UPDATE user 
                        SET username = '$username', password = '$password', name = '$hoten',
                        email = '$email', address ='$diachi', phone = $phone 
                        WHERE id_user = '$id_user'";

                        $this->Show();
                        
                        $result = mysqli_query($this->AdminModel->conn, $sql);
                         
                    }
                }

            }
        }

        public function Delete($maGiay = -1)
        {
            $admin = $this->AdminModel->ValidateToken();
            if ($admin != null) {
                $sql = 'DELETE FROM product where id_product = '.$maGiay;
                $result = mysqli_query($this->AdminModel->conn, $sql);
            }
            
            $this->Show();
        }

        public function DeleteUser($id_user = -1)
        {
            $admin = $this->AdminModel->ValidateToken();
            if ($admin != null) {
                $sql = 'DELETE FROM user where id_user = '.$id_user;
                $result = mysqli_query($this->AdminModel->conn, $sql);
            }
            $this->Show();
        }

        
    }
?>