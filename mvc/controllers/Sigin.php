<?php
    class Sigin extends Controller{

        
        public $UserModel;

        public function __construct() {
            $this->UserModel = $this->getModel('UserModel');
        }

        function Show()
        {
            $usr = $this->UserModel->ValidateToken();
            if ($usr != false) {
                header('Location: /shoez/home');
                exit;
            }else{
                $this ->getView('master1', [
                    'Page'=>'sigin'
                ]);
            }
            
        }
    }
?>