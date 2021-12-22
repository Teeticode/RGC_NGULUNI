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
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  
  <link rel="stylesheet" href="./card.css">
  <link rel="stylesheet" href="../fontawe/css/all.css">
  
</head>

<body class="g-sidenav-show  bg-gray-100">
  <?php include './aside.php';?>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            
            <li class="nav-item dropdown pe-2 d-flex align-items-center" style="margin-left:10px !important;">
              <a href="" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul style="background-color:black; margin-left:10px !important;" class="dropdown-menu  dropdown-menu-end  px-2 py-3 mx-auto me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
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
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
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
    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="card h-100 p-2">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/worship.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Work with the rockets</h5>
                        <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus sint similique sunt asperiores corporis doloribus eos dignissimos soluta, unde culpa..</p>
                        <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                        Read More
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class=" h-100  m-2">
            <div class="widget rounded" style="background-color:white; color:black;">
                                <div class="widget-about text-center">
                                    <h2 style="font-size:14px; text-transform:italics;">RGC NGULUNI</h2>
                                    <p class="mb-4" style="text-align: justify;">This is Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit.
                                        Dolores tempora accusantium culpa deleniti nesciunt repellat quisquam quos vero.
                                        Esse itaque est optio nostrum porro quisquam nihil reprehenderit fugiat enim
                                        non.</p>
                                    <ul class="social-icons list-unstyled list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"><i class="far fa-envelope"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
            </div>
        </div>
    </div>
    
    <div class="site-wrapper mt-4">
        <div class="main-overlay"></div>
        



        <!-- section starts  -->

       
        <!-- main content  -->

        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">
                  
                      <!-- left part 1st section  -->
                    <div class="col-lg-8">
                        <div class="section-header">
                            <h3 class="section-title">Editor's Pick</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                            <div ></div>
                                <div id="postdiv"  class="col-sm-6">
                                    <!-- post  -->
                                    <div class="post">
                                    <?php
                                        $ann = new Announcement();
                                        $ann1 = $ann -> get_editor_post();
                                        if($ann1){
                                            foreach($ann1 as $ROW){
                                                $user = new User();
                                                $ROW_USER = $user->get_user($ROW['userid']);
                                                include './announce.php';
                                            }
                                        }
                                        
                                    ?>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    
                                    <?php
                                        $ann = new Announcement();
                                        $anns = $ann -> get_editor_posts();
                                        if($anns){
                                            foreach($anns as $ROW){
                                                $user = new User();
                                                $ROW_USER = $user->get_user($ROW['userid']);
                                                include './sub_announce.php';
                                            }
                                        }
                                        
                                    ?>
                                        
                                    
                                   
                                </div>

                            </div>
                        </div>

                       
                      

                       

                    

                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="section-title">Latest Posts</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row h-100" >
                               
                                <?php
                                        $project = new Post();
                                        $projects = $project -> get_editor_posts();
                                        if($projects){
                                            foreach($projects as $ROW){
                                                $user = new User();
                                                $ROW_USER = $user->get_user($ROW['userid']);
                                                include './project_div.php';
                                            }
                                        }
                                      
                                     
                             
                                    ?>
                            </div> 
                        </div>
                                
                    
                    </div>
                                
                           
                        <!-- left part over here  -->
                        
                    <!-- right part starts from here  -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Your Reminders</h3>
                                </div>
                                <div id="reminders" class="widget-content">
                                
                                    
                                </div>
                            </div>  
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Newsletter</h3>
                                </div>
                                <div class="widget-content">
                                    <span class="newsletter-headline text-center mb-3">Join 50,000 subscribers</span>
                                    <form action="#">
                                        <div class="mb-2">
                                            <input type="email" class="form-control w-100 text-center"
                                                placeholder="Email address...">
                                        </div>
                                        <button class="btn btn-default btn-full">Sign Up</button>

                                    </form>
                                    <span class="newsletter-privacy text-center mt-3">
                                        By signing up, you agree to our <a href="#">Privacy policy</a>
                                    </span>
                                </div>
                            </div>  
                        </div>
                    </div>
                      
                   
                    
                </div>
            </div>
        </section>


        
        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <div class="col-md-4">
                            <span class="copyright">&copy; 2021 TC Blogs</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-itunes"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end">
                                <i class="icon-arrow-up"></i>
                                Back to Top
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>

  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/core/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/core/popper.min.js"></script>
  <script type="text/javascript" src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script type="text/javascript">
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script type="text/javascript">

      $(document).ready(function(){
         getAllUserReactions();
         setInterval(() => {
           getAllReminders();
         }, 2000);
              
         $(".project-icon").click(function(){
            $(".project-info").toggleClass("project-active");
          });
        
         
        
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
           console.log(response);
           var output = ``;
          for (var i = 0; i < response.length; i++) {
            
            output +=
            `<div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="${response[i].image}" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">${response[i].post}</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">${response[i].date}</li>
                                            </ul>
                                            <i class="fas fa-trash" style="cursor:pointer;" onclick="deleteRem(${response[i].postid}, ${response[i].current_user})"></i>
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
  function deleteRem(postid, userid){
    $.ajax({
      url:"requests.php",
      method:"POST",
      dataType:"json",
      data:{
        deleteRem:1,
        postid:postid,
        userid:userid
      }, success:function(response){
        $('.btnlike').find('#'+response.postid+'').css("color", "green");
      }
    })
  }
  function getAllUserReactions(){
    
    $.ajax({
        url: "requests.php",
        method: 'POST',
        dataType: 'json',
        data:{
            getAllUserReactions:1
        }, success:function(response){
          var d = response;
          ditems = d;
          
            ditems = ditems.map((item)=>{
            return $(item);
            
            });
          
            
          
          
          var posty = $('.likey').find("i"); 
          
          posty = posty.map((post)=>{
              return $(post);
          });
         
          
          var pos = posty['prevObject']['prevObject'];
          console.log(ditems.length);
          console.log(pos.length);
          console.log(posty['prevObject']['prevObject'][2].id);
          console.log(pos[1].id);
          
            for (let i = 0; i < ditems.length; i++) {
                $('.btnlike').find('#'+ditems[i][0].postid+'').css("color", "red"); 
            }
          
            
         
          
          
        }
     
        
    });
   
  }

  $(function(){
        $(".posttitle").click(function(){
          $.ajax({
            url: "requests.php",
            method: 'POST',
            dataType: 'json',
            data:{
                getPosts:1,
                postid:$(this).attr('id'),
                userid:$(this).attr('title')
              
            }, success:function(response){
              if(response.current_user === "189215098452"){
                var idelete = "fas fa-trash";
              }else{
                var idelete = "";
              }
              var output = `
              <div style="background-color:transparent" id="${response.postid}"> 
               <div class="thumb rounded">
                  <a href="#" style="color: #fff;font-size: 13px;border-radius: 25px;display: inline-block;padding: 6px 11px;line-height: 1;left:80px;top:190px;z-index: 1;background-color: #6e72fc;background-image: linear-gradient(315deg, #6e72fc 0%, #ad1deb 74%);" class="category-badge position-absolute">
                    ${response.category}
                  </a>
                  <div class="inner">
                    <img class="author" style="border-radius:10px;" width="300px" height="240px" src="${response.image}"/>
                  </div>
                </div> 
                <div class="details p-2">
                  <ul class="meta list-inline mb-3">
                    <li class="list-inline-item">
                      <a href="#"> 
                        <img style="border-radius:50%;" width="60px" height="50px" id="img_post" src="${response.profile_pic}" class="author" alt="">
                         <p style="color:#9faabb;"> ${response.username}</p> </a> 
                    </li>
                    <li style="color:#9faabb;" class="list-inline-item">
                      <span style="color: #6e72fc;color: linear-gradient(315deg, #6e72fc 0%, #ad1deb 74%);font-size:20px;">. &nbsp;</span> ${response.date}
                    </li>
                  </ul> 
                    <h3 style="font-size:18px">${response.post}</h3> 
                    <p>${response.pdesc}</p> 
                    <a href="javascript:confirmRefresh()"><i style="cursor:pointer;" class="${idelete}" onclick="deleteAnnn(${response.postid}, ${response.current_user})"></i></a>
                    
                  </div>
                </div>`;
        //<h3 style="font-size:18px">'+response.post+'</h3>
              $("#postdiv").html(output);
              
            }
        });

        });
  });
  
  function deleteAnnn(postid, userid){
    $.ajax({
      url:"requests.php",
      method:"POST",
      dataType:'json',
      data:{
        deleteAnn: 1,
        postid: postid,
        userid: userid
      },
      success:function(response){
        if(response.status == "delete"){
          

        }
      }
    })
  }
  function deleteLatest(postid, userid){
    $.ajax({
      url:"requests.php",
      method:"POST",
      dataType:'json',
      data:{
        deleteLat: 1,
        postid: postid,
        userid: userid
      },
      success:function(response){
        if(response.status == "delete"){
          

        }
      }
    })
  }
  function react(caller, postid, userid){
    
    
    $.ajax({
        url: "requests.php",
        method: 'POST',
        dataType: 'json',
        data:{
            react:1,
            postid:postid,
            userid:userid
           
        }, 
        success:function(response){
           if(response.status=="update" ){
             $('.btnlike').find('#'+response.postid+'').css("color", "red");
             
           }
            
        }
    });
  }

  function confirmRefresh(){
    var okToRefresh = confirm("The Post has been deleted!!");
    if(okToRefresh){
      setTimeout("location.reload(true);", 1500);
    }
  }
  function storePagePosition(){
    var page_Y = window.pageYOffset;
    localStorage.setItem("page_y", page_Y);
  }
  
  function confirmRem(){
    var okToRefresh = confirm("Added To your Reminders!!");
    if(okToRefresh){
      window.addEventListener("scroll", storePagePosition);
      var currentPageY;
      try{
          currentPageY = localStorage.getItem("page_y");
          if(currentPageY === undefined){
            localStorage.setItem("page_y") = 0;
          }
          window.scrollTo(0, currentPageY);
        }catch(e){
          console.log(e);
        }
    }
  }
  

  
   
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>