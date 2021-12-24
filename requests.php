<?php
    include("./classes/autoloader2.php");
    session_start();
     if(isset($_POST['react'])){
        $userid = $_SESSION['rgc_userid'];
        $postid = mysqli_real_escape_string($DB->connect(),$_POST['postid']);
        $DB = new Database();
        $query = "SELECT postid from project_likes WHERE postid = '$postid' && userid = '$userid'";
        $result = $DB->read($query);
        
          if($result == ""){
            
            $query1 = "INSERT INTO project_likes(postid, userid) 
            VALUES('$postid','$userid') ";
            $DB->save($query1);
            $status = "like";
           
            
          }else{
             
            $query2 = "UPDATE project_likes SET postid='$postid', userid='$userid' WHERE postid = '$postid' && userid = '$userid'";
            $DB->save($query2);
            
           $status = "update";
          }
          
          
        exit(json_encode(array('status' => "update", 'postid'=>$postid)));
    }
    
    if(isset($_POST['getAllUserReactions'])){
      $userid = $_SESSION['rgc_userid'];
      
      $conn = new mysqli('localhost', 'root', '', 'RGC_DASHBOARD');
      $reactions = [];
      $sql = $conn->query("SELECT postid, userid FROM project_likes WHERE userid = '$userid'");
      while($data = $sql->fetch_assoc()){
        $reactions[] = array("postid" => $data['postid'], "userid" => $data['userid']);
      }
          

      exit(json_encode($reactions));

      
      
    }
    if(isset($_POST['getAllUserReminders'])){
      $userid = $_SESSION['rgc_userid'];
      
      $conn = new mysqli('localhost', 'root', '', 'RGC_DASHBOARD');
      $reminders = [];
      $sql = $conn->query("SELECT postid FROM project_likes WHERE userid = '$userid'");
      while($data = $sql->fetch_assoc()){
        $postid = $data['postid'];
        $sql2 = $conn->query("SELECT * FROM project where postid = '$postid' order by `date` desc");
        while($dataRem = $sql2->fetch_assoc()){
          $reminders[] = array("postid" => $dataRem['postid'], "post" => $dataRem['post'], "image"=>addslashes($dataRem['image']),"current_user"=>$userid,
          "date"=>date('j F Y', strtotime($dataRem['date'])), "pdesc" => $dataRem['pdesc']);
        }
        
      }
          

      exit(json_encode($reminders));
    }
    if(isset($_POST['deleteRem'])){
      $userid = $_POST['userid'];
      $postid = $_POST['postid'];
      $DB = new Database();
      $query = "DELETE FROM project_likes WHERE postid='$postid' && userid='$userid'";
      $DB->save($query);
      exit(json_encode(array("status"=>"deleted", "postid"=>$postid)));
    }
    if(isset($_POST['getPosts'])){
      $userid = $_POST['userid'];
      $current_user = $_SESSION['rgc_userid'];
      $postid = $_POST['postid'];
      $conn = new mysqli('localhost', 'root', '', 'RGC_DASHBOARD');
      $posts = "";
      $sql = $conn->query("SELECT * FROM announcements WHERE postid = '$postid'");
      $sql1 = $conn->query("SELECT username, profile_pic FROM users WHERE userid = '$userid'");
      while($data = $sql->fetch_assoc()){
        while($datauser = $sql1->fetch_assoc()){
          $posts = array("username" => $datauser['username'], "profile_pic" =>addslashes($datauser['profile_pic']),
           "post" => $data['post'], "image"=>addslashes($data['image']), "pdesc"=>$data['pdesc'], "current_user"=>$current_user, "postid" => $data['postid'],
           "category"=> $data['category'], "date"=>date('j F Y', strtotime($data['date'])));
        }
        
      }
          
//array("username" => $datauser['username'], "profile_pic" => $datauser['profile_pic'], "post" => $data['post'])
      exit(json_encode($posts));

      
      
    }
    if(isset($_POST['deleteAnn'])){
      $postid = $_POST['postid'];
      $userid = $_POST['userid'];
      $query4 = "DELETE FROM announcements WHERE postid='$postid' && userid = '$userid'";
      $DB = new Database();
      $DB->save($query4);
      exit(json_encode(array("status"=>"delete", "postid"=>$postid)));
    }
    if(isset($_POST['deleteLat'])){
      $postid = $_POST['postid'];
      $userid = $_POST['userid'];
      $query4 = "DELETE FROM project WHERE postid='$postid' && userid = '$userid'";
      $query3 = "DELETE FROM project_likes WHERE postid = '$postid'";
      $DB = new Database();
      $DB->save($query4);
      $DB->save($query3);
      exit(json_encode(array("status"=>"delete", "postid"=>$postid)));
    }
    if(isset($_POST['getSubsAnn'])){
      $conn = new mysqli('localhost', 'root', '', 'RGC_DASHBOARD');
      
      $sql = $conn->query("SELECT * FROM announcements order by `date` asc limit 7");
      while($data = $sql->fetch_assoc()){
        
          $posts [] = array(
           "post" => $data['post'], "image"=>addslashes($data['image']), "postid" => $data['postid'],"userid"=>$data['userid'],
           "category"=> $data['category'], "date"=>date('j F Y', strtotime($data['date'])));
       
        
      }
      exit(json_encode($posts));
    }
    if(isset($_POST['getAllUserApp'])){
      $conn = new mysqli('localhost', 'root', '', 'RGC_DASHBOARD');
      $query = $conn -> query ("SELECT * FROM users");
      
      while($data = $query ->fetch_assoc()){
        $users [] = array("username"=>$data['username'], "email" => $data['email'], "userid" => $data['userid'], "category" => $data['category'],
        "phoneno" => $data['phone_no'], "profile_pic" => $data['profile_pic'], "date" =>date('j F Y', strtotime($data['date'])));
      }
      exit(json_encode($users));
    
    }
    if(isset($_POST['deleteAnyUser'])){
      $DB = new Database();
      $userid = $_POST['userid'];
      $query = "DELETE FROM users WHERE userid ='$userid' && email != 'admin@gmail.com'";
      $DB->save($query);
      
    }
?>