<div>
    <div class="article">
        <h2 style="font-size: 18px"><?php echo $masael_details_info->masael_title; ?></h2>
        <p class="infopost">Posted on <span class="date"><?php echo $masael_details_info->created_date_time; ?></span> by <a href="#"><?php echo $masael_details_info->masael_author_name; ?></a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>11</span></a></p>
        <div class="clr"></div>

        <div class="post_content">
            <?php echo $masael_details_info->masael_long_description; ?>
   <!--        <p class="spec"><a href="<?php //echo base_url();  ?>welcome/masael_details/<?php //echo $v_masael->masael_id;  ?>" class="rm">Read more &raquo;</a></p>-->
        </div>
        <div class="clr"></div>
    </div>

    <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>


    <!--Comments start-->
    <div class="article">
        <?php
        foreach ($comments_info as $v_comments){
        ?>
        <h2><span>3</span> Responses</h2>
        <div class="clr"></div>
            <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
                <p><a href="#"><?php echo $v_comments->user_name;?></a>:<br />
                    <?php echo $v_comments->created_date_time;?></p>
                <p align='center'><?php echo $v_comments->comments;?></p>
            </div>
        <?php } ?>
    </div>
    <?php
    $user_id=$this->session->userdata('user_id');
    if($user_id){
    ?>
    <div class="article">
        <h3 style="color: yellowgreen">
        </h3>

        <h2><span>Leave a</span> Reply</h2>
        <div class="clr"></div>
        <form action="<?php echo base_url();?>welcome/save_comments/<?php echo $user_id; ?>" method="post" id="leavereply">
            <ol>

                <li>
                    <label for="message">Your Comments</label>
                    <input type="hidden" name="masael_id" value="<?php echo $masael_details_info->masael_id; ?>">
                    <textarea id="message" name="comments" rows="8" cols="50"></textarea>
                </li>
                <li>
                    <input type="submit" name="btn" value="Post Your Comments" />
                    <div class="clr"></div>
                </li>
            </ol>
        </form>
    </div>
    <?php } ?>
</div>