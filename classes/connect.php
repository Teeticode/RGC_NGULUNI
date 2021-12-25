<?php
    class Database{
        
        function connect(){
            $url = parse_url(getenv("mysql://b22974768473db:3fbc4fe6@eu-cdbr-west-02.cleardb.net/heroku_905c59eb2484f60?reconnect=true"));
            $server = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $db = substr($url["path"], 1);

            $conn = mysqli_connect($server, $username, $password, $db);
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
