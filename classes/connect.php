<?php
    class Database{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "RGC_DASHBOARD";
        
        function connect(){
            mysql://b22974768473db:3fbc4fe6@eu-cdbr-west-02.cleardb.net/heroku_905c59eb2484f60?reconnect=true
            $cleardb_url = parse_url(getenv("mysql://b22974768473db:3fbc4fe6@eu-cdbr-west-02.cleardb.net/heroku_905c59eb2484f60?reconnect=true"));
            $cleardb_server = $cleardb_url["host"];
            $cleardb_username = $cleardb_url["user"];
            $cleardb_password = $cleardb_url["pass"];
            $cleardb_db = substr($cleardb_url["path"],1);
            $active_group = 'default';
            $query_builder = TRUE;
            // Connect to DB
            $connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
            
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
