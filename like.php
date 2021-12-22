<?php
    
   
    if(isset($_POST['how'])){
        session_start();
        $postid = $_POST['data'];
        $userid = $_SESSION['rgc_userid'];
        $conn = new mysqli("localhost", "root", "", "RGC_DASHBOARD");
        $query = "select * from project_likes where postid == '$postid' and userid == '$userid'";
        $res = $conn->query($query);
        if($res->num_rows == 0){    
            $query2 = "UPDATE `project` SET `likes` = likes + 1 WHERE postid == '$postid'";
            if($conn->query($query2)){
                $query3 = " INSERT INTO `project_likes`(`postid`,`userid`) VALUES('$postid','$userid')";
                $conn ->query($query3);
            }
        }else if($res->num_rows == 1) {  
            echo "disliked";
        }
        
       
    }
?>