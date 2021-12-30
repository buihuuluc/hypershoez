<?php

class Cart  extends Controller
{

    public $ProductModel;
    public $UserModel;

    public function __construct() {
        $this->ProductModel = $this->getModel('ProductModel');
        $this->UserModel = $this->getModel('UserModel');
    } 
    
    public function Show($id = '')
    {
        $sql ="SELECT * FROM product WHERE id_product = '$id'";
        $result = $this->ProductModel->ExecuteSigleQR($sql);

        $usr = $this->UserModel->ValidateToken();


        if ($usr != null) {
            if ($id == '') {
                $this ->getView('master1', [
                    'Page'=>'cart',
                    'user'=>$usr,
                ]);
            }else if($id != '' && $result!= false){
                $this ->getView('master1', [
                    'Page'=>'cart',
                    'user'=>$usr,
                    'products'=> $result
                ]);
                
            }
        }else{
            if ($id == '') {
                $this ->getView('master1', [
                    'Page'=>'cart',           
                ]);
            }else if($id != '' && $result!= false){
                $this ->getView('master1', [
                    'Page'=>'cart',
                    'products'=> $result
                ]);
                
            }
        }
        
        
    }
    

    //Xóa sản phẩm trong giỏ hàng
    public function Delete($id = -1){
        unset($_SESSION['cart'][$id]);

        $this->Show();

    }

}

?>