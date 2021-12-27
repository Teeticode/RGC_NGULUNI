<?php
    class Database{
       //mysql://b59ac5f6258964:f950c22e@us-cdbr-east-05.cleardb.net/heroku_ac3e6dd720c8d0b?reconnect=true
        private $host = "us-cdbr-east-05.cleardb.net";
        private $username = "b59ac5f6258964";
        private $password = "f950c22e";
        private $dbname = "heroku_ac3e6dd720c8d0b";
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
