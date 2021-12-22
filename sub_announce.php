<div class="post post-list-sm square" id="<?php echo $ROW['postid']?>">
    <div class="thumb rounded">
                                                <a href="#">
                                                    <div class="inner">
                                                        <img src="<?php echo $ROW['image']?>" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="details clearfix">
                                                <h6 id="post-t"  class="post-title my-0">
                                                
                                                    <a id="<?php echo $ROW['postid']?>" class="posttitle" style="cursor:pointer;" title="<?php echo $ROW['userid']?>" >
                                                        <?php echo $ROW['post']?>
                                                    </a>
                                                </h6>
                                                <ul class="meta list-inline mt-1 mb-0">
                                                    <li class="list-inline-item"><?php echo date('j F Y', strtotime($ROW['date']))?></li>
                                                </ul>
                                            </div>
</div>
                                       