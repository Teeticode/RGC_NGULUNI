
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
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
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
  <link rel="stylesheet" href="./assets/css/image.css">
  <link rel="stylesheet" href="./fontawe/css/all.css">
</head>

<body class="g-sidenav-show bg-gray-100">
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
          
          <ul class="navbar-nav justify-content-end">
            
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center m-auto">
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
            
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" style="background-color:#333; color:#fff !important;" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span style="color:white;" class="font-weight-bold">New message</span> <span class="text-secondary">from Laur</span> 
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
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
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('./assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php if( $user_data['profile_pic']){
                echo  $user_data['profile_pic'];
              } else{
                echo './assets/img/default-avatar.jpg';
              }
              ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
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
         
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-7 col-12 col-xl-6">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Platform Settings</h6>
            </div>
            <div class="card-body p-3">
              
              
              <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
              <ul class="list-group">
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" style="font-size:16px !important;" type="checkbox" id="flexSwitchCheckDefault3" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" style="font-size:16px !important;" type="checkbox" id="flexSwitchCheckDefault4" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0 pb-0">
                  <div class="form-check form-switch ps-0">
                    <input class="form-check-input ms-auto" style="font-size:16px !important;" type="checkbox" id="flexSwitchCheckDefault5" checked>
                    <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-12 col-xl-6 mt-3">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Profile Information</h6>
                </div>
                <div class="col-md-4 text-end">
                  <a href="./change-profile.php">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm">
                <?php
                  $userid = $_SESSION['rgc_userid'];
                  $user = new User();
                  $ROW_USER = $user->get_user($userid);
                  if($ROW_USER){
                    echo $ROW_USER['profile_detail'];
                  }
                ?>  
              </p>
              <hr class="horizontal gray-light my-4">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <?php echo $ROW_USER['username']?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (254) <?php echo $ROW_USER['phone_no']?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <?php echo $ROW_USER['email']?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; KENYA</li>
                <li class="list-group-item border-0 ps-0 pb-0">
                  <strong class="text-dark text-sm">Social:</strong> &nbsp;
                  <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-facebook fa-lg"></i>
                  </a>
                  <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                  <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="col-12 mt-4">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-1">Projects</h6>
              
            </div>
            <div class="card-body p-3">
              <div class="row" id="reminders">
                 
                
              </div>
            </div> 
          </div>
           
        </div> 
      
        
                
              
              
        </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">RGC NGULUNI</a>
                for a better experience.
              </div>
            </div>
            <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="./index.php" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
 
 
  <!--   Core JS Files   -->
  <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/core/popper.min.js"></script>
  <script type="text/javascript" src="./assets/js/core/bootstrap.min.js"></script>
  <script type="text/javascript" src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    $(document).ready(function(){
      setInterval(() => {
        getAllReminders();
      }, 2000);
    });
    function getAllReminders(){
    $.ajax({
        url: "requests.php",
        method: 'POST',
        dataType: 'json',
        data:{
            getAllUserReminders:1
        }, success:function(response){
         if(response!=""){
           response1 = response.map((res)=>{
             return $(res);
           })
           
           var output = ``;
          for (var i = 0; i < response.length; i++) {
            
            output +=
            `
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4" >
            <div class="card card-blog card-plain shadow-xl p-4" >
            <div class="position-relative">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="${response[i].image}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
              </div>
                    <div class="card-body px-1 pb-0">
                      <p class="text-gradient text-dark mb-2 text-sm">${response[i].date}</p>
                      <a href="javascript:;">
                        <h5>
                        ${response[i].post}
                        </h5>
                      </a>
                      <p class="mb-4 text-lg">
                      ${response[i].pdesc}
                      </p>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" style="background-color:lightgray; color:#333;"  name="delete" class="btn  btn-xl mb-0 p-3"><i class="fas fa-donate"></i>&nbsp;&nbsp;Fund</button>
                        
                      </div>
                    
              </div>     
            </div>         
            </div>
              
             
              `;
          
          }
          
          $('#reminders').html(output);
          
          
         }else{
          var output = `<p style="display:flex; align-items:center; justify-content:center;">No Reminders At The Moment</p>`;
          $('#reminders').html(output);
         }
        
        }
        
        
        
    });
   
  }
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>