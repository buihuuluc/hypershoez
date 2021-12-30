<?php
    class Product extends Controller{

        
        public $ProductModel;
        public $UserModel;

        public function __construct() {
            $this->ProductModel = $this->getModel('ProductModel');
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show($page=0)
        {
            $dataRs = $this->ProductModel->getAllProduct();
            $dataOf = $this->ProductModel->getProductOfset($page);
            $usr = $this->UserModel->ValidateToken();
            if ($usr != null) {
                $this ->getView('master1', [
                    'Page'=>'product',
                    'user'=>$usr,
                    'Dsgiay'=>$dataRs,
                    'ProductOF'=>$dataOf
                ]);
            }else{
                $this ->getView('master1', [
                    'Page'=>'product',
                    'Dsgiay'=>$dataRs,
                    'ProductOF'=>$dataOf
                ]);
            }

            
        }


        public function Type($idLoai = '')
        {
            
            $result = $this->ProductModel-> getMaLoaiGiay($idLoai);

            $usr = $this->UserModel->ValidateToken();
            if ($usr != null) {
                $this->getView('master1',[
                    'Page'=>'type',
                    'user'=>$usr,
                    'Type'=> $result,
    
                ]);
            }else {
                $this->getView('master1',[
                    'Page'=>'type',
                    'Type'=> $result,
    
                ]);
            }
            
            
        }
    




    }
?>