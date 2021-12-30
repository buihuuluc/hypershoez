<?php
    class AdminModel extends DB {

        
        public function AuthenSigup($adminUN, $adminPW, $adminEmail, $level){
            
            
            if (!$this->checkUserName($adminUN)) {    

            return $this->InsertNewAdmin($adminUN, $adminPW, $adminEmail, $level);

            }
            
            return false;
        }

        public function AuthenSigin($adminUN , $adminPW) {

            $sql = "SELECT * FROM admin 
            WHERE admin_username = '$adminUN'";
            
            $result = mysqli_query($this->conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                
                while($row = mysqli_fetch_array($result)) {

                    $dataPass = $row['admin_password'];
                    if ($adminPW ==  $dataPass) {

                        $token = md5($adminPW);
                        setcookie('token', $token, time()+7*24*60*60, '/');
                        $sql_token = "UPDATE admin set token = '$token' Where admin_username = '$adminUN'";
                        mysqli_query($this->conn, $sql_token);

                        return true;
                    }
                    
                }
                
            }
            return false;
        }

        public function InsertNewAdmin($AdminUN, $AdPass, $AdMail, $level)
        {
            
            $sql ="INSERT INTO admin(id_admin, admin_username, admin_password, admin_email, level)
             VALUES(null, '$AdminUN', '$AdPass', '$AdMail', '$level')";
            if (mysqli_query($this->conn, $sql)) {
               return true;
            }
            return false;
        }

        public function checkUserName($AdminUN)
        {
            $sql = "SELECT id_admin FROM admin 
            WHERE admin_username = '$AdminUN'";
            $row = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($row) > 0) {

                return true; 
            }
            return false;
        }
        
        

        public function getListAccount()
        {
            $qr = "SELECT * FROM admin";
            
            $result = mysqli_query($this->conn, $qr);
            $data = [];
            while($row = mysqli_fetch_array($result, 1)){
                $data[] = $row;
            }
            
            return $data;
        }

        public function ExecuteQR($sql)
        {
            
            $result = mysqli_query($this->conn, $sql);
            $data = [];
            if ($result != true) {
                while (($row = mysqli_fetch_array($result, 1)) != null) {

                    $data[] = $row;
                }
            }
            return $data;
        }
        
        public function ValidateToken()
        {
            $token = '';

            if (isset($_COOKIE['token'])) {
                $token = $_COOKIE['token'];
                $sql = "SELECT * FROM admin WHERE token = '$token'";
                $result = mysqli_query($this->conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while (($row = mysqli_fetch_array($result, 1)) != null) {

                        return $row;
                    }
                    
                }
                
                return null;
            }
            return null;
        }
    }
?>