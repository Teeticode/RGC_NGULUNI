<?php
    class Database{
        private 
        
        function connect(){
            $host = "eu-cdbr-west-02.cleardb.net";
            $username = "b22974768473db";
            $password = "3fbc4fe6";
            $dbname = "heroku_905c59eb2484f60";
            
           
            $connection = mysqli_connect($host, $username, $password, $dbname);
            
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
