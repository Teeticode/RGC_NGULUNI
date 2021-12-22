<?php
    class Signup{
        private $error = "";
        public function evaluate($data){
            $psd = $data['psd'];
            $psd2 = $data['psd2'];
            
            if($psd !== $psd2){
                $this-> error = $this->error . "password must match! <br/>";
            }
            foreach ($data as $key => $value) {
                if(empty($value)){
                    if( $key == "psd"){
                        $key = "password";
                    }
                    if( $key == "psd2"){
                        $key = "password 2 ";
                    }
                    if( $key == "usname"){
                        $key = "username";
                    }
                    
                   $this->error = $this->error . $key . " is empty!<br/>";
                }
                
                if($key == "email"){
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $this->error = $this->error . $key . " format invalid<br>";
                    }else{
                        $this -> evaluate_email($value);
                    }      
                }

              
                
                if($key == "name" ){
                    if(is_numeric($value)){
                        $this -> error = $this->error . "Name cant be a number<br>";
                    }
                    if(strstr($value, " ")){
                        $this -> error = $this->error . "username cant have a space<br>";
                    }
                }

            }
            if($this->error == ""){
                $this->create_user($data);
            }else{
                return $this->error;
            }
        }
        public function create_user($data){
            $name = ucfirst($data['usname']);
            $email = $data['email'];
            $psd = $data['psd'];
            $psd2 = $data['psd2'];
            $psd_hash = $this->hash_psd($psd);
            
            $gender = $data['gender'];
            $bod = $data['bod'];
            $category = $data['group'];

            $url_address = strtolower($name);
            $userid = $this->create_userid();
            $query = "insert into users(userid,username,category,gender,password,email	)
            values('$userid', '$name', '$category', '$gender','$psd_hash','$email')";
            //echo $query;
            $DB = new Database();
            $query2 = "select * from users where email = '$email' limit 1";
            
            
            $DB -> save($query);
                
            
            
        }
        public function evaluate_email($data){
            $query2 = "select * from users where email = '$data' limit 1";
            $DB2 = new Database();
            $resulte = $DB2->read($query2);
            if($resulte){
                return $this->error = $this->error . "email is already taken";
            }
        }
        private function hash_psd($psd1){
            $psd1 = hash("sha1", $psd1);
            return $psd1;
        }
        private function create_userid(){
            $length = rand(4, 19);
            $number = "";
            for ($i=0; $i < $length; $i++) { 
                $new_rand = rand(0,9);

                $number  = $number . $new_rand;
            }
            return $number;
        }
    }
?>