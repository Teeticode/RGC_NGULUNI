<div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute"><?php echo $ROW['category']?></a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="<?php echo $ROW['image']?>" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="author" width="60px" height="50px" src="<?php echo $ROW_USER['profile_pic']?>" alt="">
                                                    <?php echo $ROW_USER['username']?>
                                                </a>
                                            </li>
                                            <li class="list-inline-item"><?php echo date('j F Y', strtotime($ROW['date']))?></li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="#"><?php echo $ROW['post']?></a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                        <?php echo $ROW['pdesc']?>

                                        </p>