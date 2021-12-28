<?php
    class Database{
       //mysql://b59ac5f6258964:f950c22e@us-cdbr-east-05.cleardb.net/heroku_ac3e6dd720c8d0b?reconnect=true
        private $host = "app-d520cd59-f645-41df-9e13-0716efa621d7-do-user-10517657-0.b.db.ondigitalocean.com";
        private $username = "mysql";
        private $password = "zZVHH1gp0QQdqrW2";
        private $dbname = "mysql";
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
