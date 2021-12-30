<?php
    class UserModel extends DB {

        

        public function AuthenSigin($username , $pass)
        {
            $sql = "SELECT username, password FROM user 
            WHERE username = '$username'";
            
            $rs = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($rs) > 0) {
              
                while($row = mysqli_fetch_array($rs)){
                    $dataPass = $row['password'];
                    if (password_verify($pass, $dataPass)) {
                        $token = md5($pass);
                        setcookie('token_usr', $token, time()+7*24*60*60, '/');
                        $sql_token = "UPDATE user set token = '$token' Where username = '$username'";
                        mysqli_query($this->conn, $sql_token);

                        return true;
                    }   
                }
            }
            return false;
        }

        public function AuthenSigup($un, $pass, $name, $email, $adr, $phone ){
            
            if (!$this->checkUserName($un)) {    

             return $this->InsertNewUser($un, $pass, $name, $email, $adr, $phone);
            }
            
            return false;
        }

        public function InsertNewUser($un, $pass, $name, $email, $adr, $phone)
        {
            $qr = "INSERT INTO user(id_user, username, password, name, email, address, phone) 
            VALUES(null, '$un', '$pass', '$name', '$email', '$adr', '$phone')";
            if (mysqli_query($this->conn, $qr)) {

                return true;
            }
            return false;
        }

        public function checkUserName($un)
        {
            $qr = "SELECT * FROM user 
            WHERE username = '$un'";
            $row = mysqli_query($this->conn, $qr);
            if (mysqli_num_rows($row) > 0) {

                return true; 
            }
            return false;
        }
        
        


        public function getAllUser()
        {
            $sql = "SELECT * FROM user";
            $row = mysqli_query($this->conn, $sql);
            
            $data = [];
            while ($rs =  mysqli_fetch_array($row)) {
                $data[] = $rs;
            }
            
            return $data;
        }

        public function ExecuteSigleQR($sql)
        {
           
            $result = mysqli_query($this->conn, $sql);
            if ($result == true) {

                return $row = mysqli_fetch_array($result, 1);

            }
            return false;
        }

        public function ValidateToken()
        {
            $token = '';

            if (isset($_COOKIE['token_usr'])) {
                $token = $_COOKIE['token_usr'];
                $sql = "SELECT * FROM user WHERE token = '$token'";
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