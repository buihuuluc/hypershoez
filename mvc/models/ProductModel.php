<?php
    class ProductModel extends DB {

       

        public function getAllProduct(){   
            $qr = "SELECT * FROM product ORDER BY product . gia ASC";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }
        
        public function getProductOfset($page){
            $qr = "SELECT * FROM product ORDER BY product.gia ASC LIMIT $page, 12";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }

        public function getMaLoaiGiay($idLoai)
        {
            $sql ="SELECT * FROM product WHERE id_brand = '$idLoai'";
            $Result = mysqli_query($this->conn, $sql);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
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
        public function SanPhamLienQuan($idBrand)
        {
            $qr ="SELECT * FROM product WHERE id_brand = '$idBrand' ORDER BY RAND() limit 3";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }

        public function getRDProduct_8()
        {
            $qr ="SELECT * FROM product ORDER BY RAND() limit 8";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }
        public function getRDProduct_10()
        {
            $qr ="SELECT * FROM product ORDER BY RAND() limit 10";
            $Result = mysqli_query($this->conn, $qr);

            $data = [];
            while($row = mysqli_fetch_array($Result, 1)){
                
                $data[] = $row;
            }
            return $data;
        }
        
    }
    
?>