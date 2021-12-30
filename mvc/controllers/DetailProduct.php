<?php
    class DetailProduct extends Controller{

        
        public $ProductModel;
        public $UserModel;

        public function __construct() {
            $this->ProductModel = $this->getModel('ProductModel');
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show($id = -1)
        {   


            $sql ="SELECT * FROM product WHERE id_product = '$id'"; 
            $result = $this->ProductModel->ExecuteSigleQR($sql);

            $usr = $this->UserModel->ValidateToken();
            if ($usr != null) {
                if ($result != false) {
                    $this ->getView('master1', [
                        'Page'=>'detailproduct',
                        'user'=>$usr,
                        'ProductDetail'=>$result,
                        // 'ProductOther'=> $resultOther
                    ]);
                }else {

                }
            }else{
                if ($result != false) {
                    $this ->getView('master1', [
                        'Page'=>'detailproduct',
                        'ProductDetail'=>$result,
                        // 'ProductOther'=> $resultOther
                    ]);
                }else {
                    
                }
            }
                    
        }
    }
?>