<?php
    class Database{
        private $host = "f80b6byii2vwv8cx.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
        private $username = "yoev16r8k3p835fr";
        private $password = "taa6f470qq04zwuo";
        private $dbname = "dkz3cdtolefx1flf";
        /*private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "rgc_dashboard";*/
        //utf8mb4_unicode_ci
        
        function connect(){
            
            
           
            $connection = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
            
            return $connection;
        }

        function read($query){
            $conn = $this -> connect();
            $result = mysqli_query($conn, $query);
            
            if(!$result){
                return false;
            }else{
                $data = false;
                while ($row = mysqli_fetch_assoc($result)){
                    $data[] = $row;
                }
                return $data;
            }
        }
        
        function save($query){
            $conn = $this -> connect();
            $result = mysqli_query($conn, $query);
            
            if(!$result){
                return false;
            }else{
                return true;
            }

        }

       
    }
    
    
?>
