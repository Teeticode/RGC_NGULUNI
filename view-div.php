<div class="col-md-12 col-sm-6 ">
                                    <!-- post  -->
                                    <div class="post post-list clearfix h-100">
    
        
    <div class="thumb rounded">
        <span class="post-format-sm">
            <i class="icon-picture"></i>
        </span>
        <a href="#">
            <div class="inner">
                <img src="<?php echo $row['image']?>" alt="">
                
            </div>
        </a>
    </div>
    <div class="details">
        <ul class="meta list-inline mb-3">
            <li class="list-inline-item">
                <a href="#">
                    <img width="60px" height="50px" id="img_post" src="<?php echo $row_user['profile_pic']?>" class="author" alt="">
                    <?php echo $row_user['username']?>
                  
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#"><?php echo $row['category']?></a>
               
            </li>
            <li class="list-inline-item">
                <?php echo date('j . F . Y', strtotime($row['date']))?>
                
            </li>

        </ul>
        <h5 class="post-tile">
            <a href="#" id="post">
              
                <?php echo $row['post']?>
            </a>
        </h5>
        <p class="excerpt mb-0" id="pdesc">
            <?php echo $row['pdesc']?>
        </p>
        <div class="post-bottom clearfix d-flex align-items-center">
            <div class="social-share me-auto" id="cart-popover">
                
                <a class=" btnlike add_to_project " data-placement="bottom" >
                    <i id="<?php echo $row['postid'];?>" style="font-size:17px;" onclick="react(this, <?php echo $row['postid']?>,  <?php echo $_SESSION['rgc_userid']?> )"  class="fas fa-heart likey" ></i>
</a>
            </div>
            <div class="more-button float-end">
                <a href="#"><span class="icon-options"></span></a>
            </div>
        </div>
    </div>

</div>
                                    
</div>

          


