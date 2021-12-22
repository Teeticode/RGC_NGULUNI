<?php
    class Post{
        private $error = "";
        public function create_post($userid, $data, $files){
            if(!empty($data['ptitle']) && !empty($data['pdesc']) && !empty($data['category']) && !empty($files['file']['name']) ){
                $myimage = "";
                $has_image = 0;
                
                if($_FILES['file']['name'] !== "" ){
                  
                    
                        $folder = "../uploads/";
                        if(!file_exists($folder)){
                            mkdir($folder, 0777, true);
                        }
                        $image_class = new Image();
                        $myimage = $folder . $image_class -> generate_file_name(15) . ".jpg";
                        
                        move_uploaded_file($_FILES['file']['tmp_name'], $myimage);
                        
                        $image_class -> crop_image($myimage, $myimage, 600, 600 );
                    
                        $has_image = 1;
                    
                 
                            
                       
                             

                }
                    $ptitle = addslashes($data['ptitle']);
                    $pdesc = addslashes($data['pdesc']);
                    $category = addslashes($data['category']);
                    $postid = $this -> create_postid();
                    $query="insert into project(postid,userid,post,pdesc,image,has_image,category	
                    )
                    values('$postid', '$userid', '$ptitle', '$pdesc','$myimage', '$has_image', '$category')";
                    $DB = new Database();
                    $DB->save($query);
                
               
            }else{
                $this -> error .= "Please Post Something! yoo <br>";
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
            $query = "select * from project order by date desc limit 6";
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
            $query = "SELECT * from project where postid = '$post_id' limit 1";
            $DB = new Database();
            $result = $DB -> save($query);
            
        }
        public function check_view($post_id){
            if(!is_numeric($post_id)){
                return false;
            }
            $query = "SELECT * from project where postid = '$post_id' limit 1";
            $DB = new Database();
            $result = $DB -> read($query);
            if(is_array($result)){
                return true;
            }
            return false;
            
        }
        public function get_latest_editor(){
            $query = "select * from project order by date desc limit 5";
            $DB = new Database();
            $result = $DB->read($query);
            if(!$result){
                return false;
            }else{
                return $result;
            }
        }
        public function like_post($id, $post, $userid){
                // update likes
                $sql = "update $post set likes = likes + 1 where postid = '$id' limit 1  ";
                $DB = new Database();
                $DB -> save($sql);

                //save likes
                $sql1 = "select likes from likes where post = '$post' && contentid = '$id' limit 1 ";
              
                $resultlike = $DB -> read($sql1);
                if(is_array($resultlike)){
                    $likes = json_decode($resultlike[0]['likes'], true);
                    $user_ids = array_column($likes, "user_id");
                    if(!in_array($userid, $user_ids)){
                        
                        $arr["user_id"] = $userid;
                        $arr["date"] = date('Y.m.d');
                        $arr2[] = $arr; 
                        $likes = json_encode($arr2);
                        $sql3 = "update likes set likes = '$likes' where post = '$post' && contentid = '$id' limit 1";
                        $DB -> save($sql3);
                    }
                }else{
                   
                    $arr["user_id"] = $userid;
                    $arr["date"] = date('Y.m.d');
                    $arr2[] = $arr; 
                    $likes = json_encode($arr2);
                    $sql3 = "insert into likes(contentid,post,likes) values('$id', '$post', '$likes')";
                    $DB -> save($sql3);
                     
                    
                   
                }
        }
    }
?>