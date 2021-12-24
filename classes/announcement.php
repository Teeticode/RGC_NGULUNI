<?php
    class Announcement{
        private $error = "";
        public function create_post($userid, $data, $files){
            if(!empty($data['ptitle']) && !empty($data['pdesc']) && !empty($data['category']) && !empty($files['file']['name'])){
                $myimage = "";
                $has_image = 0;
                if($files['file']['name'] !== ""){
                    $folder = "./uploads/";
                    if(!file_exists($folder)){
                        mkdir($folder, 0777, true);
                    }
                    $image_class = new Image();
                    $myimage = $folder . $image_class -> generate_file_name(15) . ".jpg";
                    
                    move_uploaded_file($_FILES['file']['tmp_name'], $myimage);
                    
                    $image_class -> crop_image($myimage, $myimage, 600, 600 );
                
                    $has_image = 1;
                }
                $ptitle = addslashes(mysqli_real_escape_string($DB->connect(),$data['ptitle']));
                $pdesc = addslashes(mysqli_real_escape_string($DB->connect(),$data['pdesc']));
                $category = addslashes(mysqli_real_escape_string($DB->connect(),$data['category']));
                $postid = $this -> create_postid();
                $query="insert into announcements(postid,userid,post,pdesc,image,has_image,category	
                )
                values('$postid', '$userid', '$ptitle', '$pdesc','$myimage', '$has_image', '$category')";
                $DB = new Database();
                $DB->save($query);
            }else{
                $this->error .= "Please Post Something!!<br>";
            }
            return $this->error;
        }
        private function create_postid(){
            $length = rand(4, 19);
            $number = "";
            for ($i=0; $i < $length; $i++) { 
                $new_rand = rand(0,9);

                $number  = $number . $new_rand;
            }
            return $number;
        }
        public function get_editor_posts(){
            $query = "select * from announcements order by date asc limit 5";
            $DB = new Database();
            $result = $DB->read($query);
            if(!$result){
                return false;
            }else{
                return $result;
            }
        }
        public function get_editor_post(){
            $query = "select * from announcements order by date desc limit 1";
            $DB = new Database();
            $result = $DB->read($query);
            if(!$result){
                return false;
            }else{
                return $result;
            }
        }
        public function check_post($post_id){
            if(!is_numeric($post_id)){
                return false;
            }
            $query = "SELECT * FROM announcements WHERE postid = '$post_id' limit 1";
            $DB = new Database();
            $result = $DB -> save($query);
            
        }
        public function check_view($post_id){
            if(!is_numeric($post_id)){
                return false;
            }
            $query = "SELECT * from announcements where postid = '$post_id' limit 1";
            $DB = new Database();
            $result = $DB -> read($query);
            if(is_array($result)){
                return true;
            }
            return false;
            
        }
    }
?>