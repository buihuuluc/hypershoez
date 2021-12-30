<?php
    class Introduce extends Controller{

        public $UserModel;

        public function __construct() {
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show()
        {

            $usr = $this->UserModel->ValidateToken();
            if ($usr != null) {
                $this ->getView('master1', [
                    'Page'=>'introduce',
                    'user'=>$usr
                ]);
            }else{
                $this ->getView('master1', [
                    'Page'=>'introduce'
                ]);
            }
            
        }

    }
?>