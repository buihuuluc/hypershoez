<?php
    class App{

        protected $controller ="Home";
        protected $action ="Show";  
        protected $params = [];

        function __construct(){
            //Array ( [0] => Home [1] => new [2] => 1 [3] => 2 [4] => 3 [5] => 4 )
             $arr  = $this->urlProcess();

             //Xử Lý Controller
            if(isset($arr[0])){
                if( file_exists("./mvc/controllers/" . $arr[0] . ".php") ){
                    $this->controller = $arr[0];
                    unset($arr[0]);
                }
            }

             require_once ("./mvc/controllers/".$this->controller.".php");
             $this->controller = new $this->controller; // Khởi tạo đối tượng

             //Xử Lý Acction
             if (isset($arr[1])) {
                 //Kiểm Tra phương thức method_Name có tồn tại trong đối tượng object ko trả về boolen
                 if (method_exists($this->controller, $arr[1])) {
                     $this->action = $arr[1];
                 }
                 unset($arr[1]);
             }

             //Xử Lý Params 
             $this->params = $arr?array_values($arr):[];

             
             //Khi có giá trị sử dụng hàm này để khởi chạy Vào các Method Xử Lý Ở Controller
             call_user_func_array([$this->controller, $this->action], $this->params );

        }

        function urlProcess()
        {
            if (isset($_GET['url'])) {
                //Xử lý chuỗi và trả về mảng sạch
               return explode("/",filter_var(trim($_GET['url'], '/')) );
            }
            
        }
        
    }
?>