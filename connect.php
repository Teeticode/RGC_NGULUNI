<?php
    class Database{
       
        private $host = "eu-cdbr-west-02.cleardb.net";
        private $username = "b6d0bfe5d90bf5";
        private $password = "e2c584f5";
        private $dbname = "heroku_e834b0ae94fcdca";
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
