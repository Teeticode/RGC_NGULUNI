<div class="col-md-12 col-sm-6 mb-5">
                                    <!-- post  -->
                                    <div class="post post-list clearfix h-100">
    
        
    <div class="thumb rounded">
        <span class="post-format-sm">
            <i class="icon-picture"></i>
        </span>
        <a href="#">
            <div class="inner">
                <img src="<?php echo $ROW['image']?>" alt="">
                <input name="image" value="<?php echo $ROW['image']?>" type="hidden" id="image" class="form-control">
            </div>
        </a>
    </div>
    <div class="details">
        <ul class="meta list-inline mb-3">
            <li class="list-inline-item">
                <a href="#">
                    <img width="60px" height="50px" id="img_post" src="<?php echo $ROW_USER['profile_pic']?>" class="author" alt="">
                    <?php echo $ROW_USER['username']?>
                    <input name="profile_pic" value="<?php echo $ROW['profile_pic']?>" type="hidden" id="profile_pic" class="form-control">
                    <input name="usname" value="<?php echo $ROW['username']?>" type="hidden" id="username" class="form-control">
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#"><?php echo $ROW['category']?></a>
                <input name="category" value="<?php echo $ROW['category']?>" type="hidden" id="category" class="form-control">
            </li>
            <li class="list-inline-item">
                <?php echo date('j . F . Y', strtotime($ROW['date']))?>
                <input name="date" value="<?php echo date('j . F . Y', strtotime($ROW['date']))?>" type="hidden" id="date" class="form-control">
            </li>

        </ul>
        <h5 class="post-tile">
            <a href="#" id="post">
                <input name="post" value="<?php echo $ROW['post']?>" type="hidden" id="post" class="form-control">
                <input name="postid" value="<?php echo $ROW['postid']?>" type="hidden" id="postid" class="form-control">
                <?php echo $ROW['post']?>
            </a>
        </h5>
        <p class="excerpt mb-0" id="pdesc">
            <?php echo $ROW['pdesc']?>
        </p>
        <div class="post-bottom clearfix d-flex align-items-center">
            <div class="social-share me-auto" id="cart-popover" >
                <div style="display:flex !important; justify-content:space-between !important; align-items:center !important;">
                    <a  class=" btnlike add_to_project " data-placement="bottom" >
                        <i id="<?php echo $ROW['postid'];?>"  style="font-size:17px; cursor:pointer;" onclick="react(this, <?php echo $ROW['postid']?>,  <?php echo $_SESSION['rgc_userid']?> )"  class="fas fa-heart likey" ></i>
                    </a>
                    <?php
                    $userid = $_SESSION['rgc_userid'];
                        if($userid === '189215098452'){
                            echo '<a href="javascript:confirmRefresh()" style="margin-left:100%; cursor:pointer;">
                        <i class="fas fa-trash" onclick="deleteLatest('.$ROW['postid'].', '.$userid.')"></i>
                    </a>';
                        }
                    ?>
                    
                    
                </div>
                
                
            </div>
            <div class="more-button float-end">
                <a href="#"><span class="icon-options"></span></a>
            </div>
        </div>
    </div>

</div>
                                    
</div>

          


