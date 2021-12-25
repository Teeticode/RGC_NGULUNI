<?php
    class Database{
        private $host = "eu-cdbr-west-02.cleardb.net";
        private $username = "b22974768473db";
        private $password = "3fbc4fe6";
        private $dbname = "heroku_905c59eb2484f60";
        
        function connect(){
            
            
           
            $connection = mysql_connect($this->host, $this->username, $this->password, $this->dbname);
            
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
