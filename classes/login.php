<?php

    class Login{
        private $error = "";
        public function evaluate($data){
            $DB = new Database();
            $email = addslashes($data['email']);
            $psd = addslashes($data['psd']);
            $query = "SELECT * from `users` WHERE `email` = '$email' limit 1"; 
            
      
            $result = $DB->read($query);
            if($result){
                $row = $result[0];
               
                if($this-> hash_text($psd) === $row['psd']){
                    $_SESSION['rgc_userid'] = $row['userid'];
                }else{
                    $this->error .= "Wrong email or password<br>";
                }
            }else{
                 $this->error .="Wrong email or password";
            }
            
            return $this->error;

        }
        public function check_login($user_id){
           if(is_numeric($user_id)){  
                $query = "select * from users where userid='$user_id' limit 1";
                $DB = new Database();
                $result = $DB -> read($query);
                if($result){
                    $user_data = $result[0];
                    return $user_data;
                }else{
                    header("Location:sign-in.php");
                    die;
                }
            
            }else{
                header("Location:sign-in.php");
                die;
            }
        }
        private function hash_text($text){
            $text = hash("sha1", $text);
            return $text;
        }
        
    }
?>