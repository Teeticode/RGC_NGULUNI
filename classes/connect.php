<?php
    class Database{
        private $host = "mysql://eu-cdbr-west-02.cleardb.net";
        private $username = "b22974768473db";
        private $password = "3fbc4fe6";
        private $dbname = "heroku_905c59eb2484f60";
        
        function connect(){
            
            
            $cleardb_url = parse_url(getenv("mysql://b22974768473db:3fbc4fe6@eu-cdbr-west-02.cleardb.net/heroku_905c59eb2484f60?reconnect=true"));
            $cleardb_server = $cleardb_url["host"];
            $cleardb_username = $cleardb_url["user"];
            $cleardb_password = $cleardb_url["pass"];
            $cleardb_db = substr($cleardb_url["path"],1);
            $active_group = 'default';
            $query_builder = TRUE;
            // Connect to DB
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
