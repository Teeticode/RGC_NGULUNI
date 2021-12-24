
<?php
    session_start();
    include "./classes/autoloader2.php";
    if(isset($_SESSION['rgc_userid']) && is_numeric($_SESSION['rgc_userid'])){
      $user_id = $_SESSION['rgc_userid'];
      $login = new Login();
      $result = $login->check_login($user_id);
        if($result){
          //retrieve user data
          $user = new User();
          $user_data = $user -> get_data($user_id);

          if(!$user_data){
            header("Location:sign-in.php");
            die;	
          }
        }else{
            header("Location:sign-in.php");
            die;
        }
  }else{
      header("Location:sign-in.php");
      die;
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    RGC-DASHBOARD
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/file.css">
</head>

<body class="g-sidenav-show bg-gray-100" >
<?php include './aside.php';?>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
         <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid" id="website_stuff">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php echo $user_data['profile_pic']?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $user_data['username']?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
              <?php echo $user_data['category']?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                
                <li class="nav-item">
                  <a  class="nav-link mb-0 px-0 py-1 "  href="./profile.php"  >
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>settings</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                              </polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                              </path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1">Go Back</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
        <div class="col-md-7 col-12 col-xl-6 mt-0 d-flex flex-column mx-auto">
              
              <div class="card  mt-2">
                
                <div class="card-header pb-0 text-left ">
                  <h3 class="font-weight-bolder text-info text-gradient">Update Profile</h3> 
                  <p style="color:red;">Please fill in all fields to update correctly!!!</p>
                </div>
                <div class="card-body p-3">
                
                  <form role="form" method="POST" enctype="multipart/form-data">
                    <?php
                    if($_SERVER['REQUEST_METHOD']==='POST'){
                      $userid = $_SESSION['rgc_userid'];
                      $name = ucfirst($_POST['usname']);
                      $email = $_POST['email'];
                      $psd = $_POST['psd'];
                      $psdn = hash("sha1", $psd);
                      $psd2 = $_POST['psd2'];
                      $category = $_POST['category'];
                      $phoneno = $_POST['phoneno'];
                      $pdetail = $_POST['pdetail'];
                      //check if the email entered is duplicated from db AND if it is from another user
                      if($psd !== ""){
                        if($psd !== $psd2){
                          echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
               
                        <p>passwords dont match</p><br>
                         
                        </div>";
                        }else{
                          $query="select * from users where email='$email' && userid != '$userid'";
                          $DB = new Database();
                          $result = $DB->read($query);

                          if(!$result){
                            if($_FILES['file']['name'] !== ""){
                              $allowed_size = (1024*1024) * 7;
                              if($_FILES['file']['size'] < $allowed_size){
                                $folder = "./uploads/" . $user_data['userid'] . "/";
                                if(!file_exists($folder)){
                                  mkdir($folder, 0777, true);
                                }
                                $image = new Image();
                                $filename = $folder . $image -> generate_file_name(15) . ".jpg";
                                $userid = $user_data['userid'];
                                move_uploaded_file($_FILES['file']['tmp_name'], $filename);
                                if(file_exists($user_data['profile_pic'])){
                                  unlink($user_data['profile_pic']);
                                }
                                $image -> crop_image($filename, $filename, 800, 800 );
                                if($_FILES['file']['type'] == 'image/jpeg'){
                                  if(file_exists($filename)){
                                    $query = "update users set profile_pic='$filename', password='$psdn', username = '$name', email='$email', profile_detail='$pdetail', category='$category', phone_no='$phoneno' where userid = '$userid'";
                                    $DB = new Database();
                                    $result=$DB->save($query);
                                    if($result){
                                      echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:green; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                        
                                      <p>Profile updated Succesfully</p><br>
                                      
                                      </div>";
                                      header("Location:./profile.php", $replace=TRUE);
                                      
                                    }else{
                                      echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                      <p>Something went wrong</p><br>
                                      
                                      </div>";
                                    }
                                  }
                                }else{
                                  echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                      <p>enter a valid image</p><br>
                                      
                                      </div>";
                                }
                              }else{
                                echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                      <p>file too large</p><br>
                                      
                                      </div>";
                              }
                            }else{
                              $query = "update users set password='$psdn', username = '$name', email='$email', profile_detail='$pdetail', category='$category', phone_no='$phoneno' where userid = '$userid'";
                              $DB = new Database();
                              $result=$DB->save($query);
                              if($result){
                                echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:green; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                <p>Profile updated Succesfully</p><br>
                                
                                </div>";
                              }else{
                                  echo "something went wrong";
                              }
                            }
                          }else{
                            echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                            <p>email is taken</p><br>
                            
                            </div>";
                            
                          }
                        }
                      }else{
                          $query="select * from users where email='$email' && userid != '$userid'";
                          $DB = new Database();
                          $result = $DB->read($query);

                          if(!$result){
                            if($_FILES['file']['name'] !== ""){
                              $allowed_size = (1024*1024) * 7;
                              if($_FILES['file']['size'] < $allowed_size){
                                $folder = "../uploads/" . $user_data['userid'] . "/";
                                if(!file_exists($folder)){
                                  mkdir($folder, 0777, true);
                                }
                                $image = new Image();
                                $filename = $folder . $image -> generate_file_name(15) . ".jpg";
                                $userid = $user_data['userid'];
                                move_uploaded_file($_FILES['file']['tmp_name'], $filename);
                                if(file_exists($user_data['profile_pic'])){
                                  unlink($user_data['profile_pic']);
                                }
                                $image -> crop_image($filename, $filename, 800, 800 );
                                if($_FILES['file']['type'] == 'image/jpeg'){
                                  if(file_exists($filename)){
                                    $query = "update users set profile_pic='$filename', username = '$name', email='$email', profile_detail='$pdetail', category='$category', phone_no='$phoneno' where userid = '$userid'";
                                    $DB = new Database();
                                    $result=$DB->save($query);
                                    if($result){
                                      echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:green; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                        
                                      <p>Profile updated Succesfully</p><br>
                                      
                                      </div>";
                                    }else{
                                      echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                      <p>Something went wrong</p><br>
                                      
                                      </div>";
                                    }
                                  }
                                }else{
                                  echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                      <p>enter a valid image</p><br>
                                      
                                      </div>";
                                }
                              }else{
                                echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                      <p>file too large</p><br>
                                      
                                      </div>";
                              }
                            }else{
                              $query = "update users set  username = '$name', email='$email', profile_detail='$pdetail', category='$category', phone_no='$phoneno' where userid = '$userid'";
                              $DB = new Database();
                              $result=$DB->save($query);
                              if($result){
                                echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:green; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                                <p>Profile updated Succesfully</p><br>
                                
                                </div>";
                              }else{
                                  echo "something went wrong";
                              }
                            }
                          }else{
                            echo "<div class='col-9 w-100 ms-auto px-1 ' style='border-radius:10px;background-color:red; color:white; height:100%; font-size:10px; text-align:center; display:flex; align-items:center; justify-content:center;'>
                  
                            <p>email is taken</p><br>
                            
                            </div>";
                            
                          }
                      }
                      

                      
                    }
                        
                    ?>
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" name="email" value="<?php echo $user_data['email']?>" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" name="usname" value="<?php echo $user_data['username']?>"  class="form-control" placeholder="username" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" name="psd"  class="form-control" placeholder="Update Password / Old Password" >
                    </div>
                    <label>Confirm Password</label>
                    <div class="mb-3">
                      <input type="password" name="psd2"  class="form-control" placeholder="confirm Password">
                    </div>
                    <label>Phone No.</label>
                    <div class="mb-3">
                      <input type="text" name="phoneno" value="<?php echo "0".$user_data['phone_no']?>"  class="form-control" placeholder="0769966763">
                    </div>
                    <label>Update Profile Status</label>
                    <div class="mb-3">
                      <textarea type="textbox" name="pdetail" value="<?php echo $user_data['profile_detail']?>"   class="form-control" placeholder="Tell us about Yourself" ></textarea>
                    </div>
                    <label>Category</label>
                    <div class="mb-3">
                        <select type="text" name="category" value="" class="form-control" >
                            <option><?php echo $user_data['category'];?></option>
                            <option>Men</option>
                            <option>Women</option>
                            <option>Youth</option>
                            <option>Sunday School</option>

                        </select>
                    </div>
                    <div>
                      <h4 style="font-size:14px;">Upload Your Profile Pic</h4>
                      <Label for="file-upload" class="custom-file-upload" style="
                      <?php 
                        if($user_data['profile_pic'] ===""){
                          echo "background-image:url('./assets/img/default-avatar.jpg');";
                        }else{
                          echo "background-image:url(".$user_data['profile_pic'].");";
                        }
                        ?>"></Label>
                      <div class="mb-3">
                        <input type="file" name="file" id="file-upload">
                      </div>
                    </div>
                   
                    
                    
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Update Info</button>
                    </div>
                  </form>
                </div>
                
              </div>
        </div>
        <div class="col-md-7 col-12 col-xl-6">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Conversations</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Sophie B.</h6>
                    <p class="mb-0 text-xs">Hi! I need more information..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Anne Marie</h6>
                    <p class="mb-0 text-xs">Awesome work, can you..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../assets/img/ivana-square.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Ivanna</h6>
                    <p class="mb-0 text-xs">About files I can..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Peterson</h6>
                    <p class="mb-0 text-xs">Have a great afternoon..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0">
                  <div class="avatar me-3">
                    <img src="../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Nick Daniel</h6>
                    <p class="mb-0 text-xs">Hi! I need more information..</p>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    </div>

         
            
    </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    $(document).ready(function(){
      function load_stuff(){
        $.ajax({
          url:"change_profile.php",
          method:"POST",
          success:function(data){
            $('#website_stuff').html(data);
          }
        })
      }
    })
  </script>
  <!-- Github buttons -->
  <script src="../assets/js/jquery.min.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>