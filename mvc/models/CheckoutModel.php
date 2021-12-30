<?php
    class CheckOutModel extends DB {


        public function InsertCheckout($userNameout, $addressout, $emailout, $phoneout, $Tong)
        {
            $sql = "INSERT INTO hoadonshoez 
            (id_hoadon, ten_khachhang, diachi, email_Khach, sodienthoai, tonghoadon) 
            VALUES (null, '$userNameout', '$addressout', '$emailout', '$phoneout', '$Tong')";
            $result = false;
            if (mysqli_query($this->conn, $sql)) {
                $result = true;
            }
            return $result;
        }
        public function getAllCheckout(){   
            $qr = "SELECT * FROM hoadonshoez";
            $Result = mysqli_query($this->conn, $qr);
    
            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
    
        }
        public function getIDNew(){   
            $qr = "SELECT MAX( id_hoadon ) AS id_hoadon FROM hoadonshoez;";
            $Result = mysqli_query($this->conn, $qr);
            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
    
        }
        public function getHoaDon($hoadon)
        {
            
          
            $qr = "SELECT * FROM hoadonshoez WHERE id_hoadon = $hoadon ";
            
            $Result = mysqli_query($this->conn, $qr);
    
            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
             
            }
            return  $data;
           
         
        }
   
        
    }
    
?>