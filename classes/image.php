<?php
    class Image{
        private $error = "";
        public function generate_file_name($length){
            $array = array(0,1,2,3,4,5,6,7,8,9,'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
            for($i = 0; $i < $length; $i++){

                $random = rand(0, 61);
                $text = $array[$random];
            }
          
            return $text;
        }
        public function crop_image($original_file_name, $cropped_file_name, $max_width, $max_height){
            if(file_exists($original_file_name)){
                //get the original image from the file name
                
                $original_image = imagecreatefromjpeg($original_file_name);
                $original_width = imagesx($original_image);
                $original_height = imagesy($original_image);
                if($original_height > $original_width){
                    //make width equal to max width
                    $ratio = $max_width / $original_width;
                    $new_width = $max_width;
                    $new_height = $original_height * $ratio;
                }else{
                    $ratio = $max_height / $original_height;
                    $new_height = $max_height;
                    $new_width = $original_width * $ratio;
                }
            }
            //create the resized image
            $new_image = imagecreatetruecolor($new_width, $new_height);
            //create a copy of resized image from the original image 
            imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
            imagedestroy($original_image);
            if($new_height > $new_width){
                $diff = ($new_height - $new_width);
                $y = round($diff / 2);
                $x = 0;
            }else{
                $diff = ($new_width - $new_height);
                $x = round($diff / 2);
                $y = 0;    
            }
            $new_cropped_image = imagecreatetruecolor($max_width, $max_height);
            //create a copy of cropped image from the original image 
            imagecopyresampled($new_cropped_image, $new_image, 0, 0, $x, $y, $max_width, $max_height, $max_width, $max_height);
            imagedestroy($new_image);
            //save the cropped image
            imagejpeg($new_cropped_image, $cropped_file_name, 100);
            imagedestroy($new_cropped_image);
        }
    }
?>