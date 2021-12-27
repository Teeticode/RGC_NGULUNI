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
  
  <link rel="stylesheet" href="./card.css">
  <link rel="stylesheet" href="./fontawe/css/all.css">
  
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Home</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            
           
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="row mt-4">
        <div class="col-xl-12 col-xl-12 myslides">
          <!--Slides begin-->
          <div class="slider">
            <div class="slides">
              <!--radio buttons start-->
              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">
              <!--radio buttons end-->
              <!--slide images begin-->
              <div class="slide first">
                <img src="./assets/img/slide-1.jpg" width="100px" height="100px" alt="">
              </div>
              <div class="slide">
                <img src="./assets/img/slide-3.jpg"  width="100px" height="100px" alt="">
              </div>
              <div class="slide">
                <img src="./assets/img/slide-2.jpg"  width="100px" height="100px" alt="">
              </div>
              <div class="slide">
                <img src="./assets/img/slide-4.jpg"  width="100px" height="100px" alt="">
              </div>
              <!--slide images end-->
              <!--automatic navigation starts-->
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
              </div>
              <!--automatic navigation ends-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation ends-->
          </div>
          <!--Slides end-->
        </div>
    </div>
    <section class="section-services">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-md-10 col-lg-8">
					<div class="header-section">
						<h2 class="title">About RGC<span> NGULUNI</span></h2>
						<p class="description">We Are a Self Purpose Driven Church</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Start Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="part-1">
							<i class="fab fa-500px"></i>
							<h3 class="title">Express delivery innovative Design service</h3>
						</div>
						<div class="part-2">
							<p class="description">Express delivery inno service effective logistics solution for delivery of small cargo delivery service.</p>
							
						</div>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Start Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="part-1">
							<i class="fab fa-angellist"></i>
							<h3 class="title">Online chat may refer to any kind communication</h3>
						</div>
						<div class="part-2">
							<p class="description">Express delivery inno service effective logistics solution for delivery of small cargo delivery service.</p>
							
						</div>
					</div>
				</div>
				<!-- / End Single Service -->
				<!-- Start Single Service -->
				<div class="col-md-6 col-lg-4">
					<div class="single-service">
						<div class="part-1">
							<i class="fas fa-award"></i>
							<h3 class="title">Service provider provide organizations consulting</h3>
						</div>
						<div class="part-2">
							<p class="description">Express delivery inno service effective logistics solution for delivery of small cargo delivery service.</p>
							
						</div>
					</div>
				</div>
				<!-- / End Single Service -->
				
			</div>
		</div>
	</section>
    
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
                            <h3 class="section-title">Announcements</h3>
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

                        <div class="section-header mt-4">
                            <h3 class="section-title">Projects</h3>
                        </div>

                        <div class="padding-30 rounded bordered mt-4">
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
                        <div class="sidebar mt-5">
                            
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
    
  </div>
  <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/core/popper.min.js"></script>
  <script type="text/javascript" src="./assets/js/core/bootstrap.min.js"></script>
  <script type="text/javascript" src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  
  
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

  
  
   
  </script>
  <script type="text/javascript">
    
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