<?php
foreach($all_published_masael_info as $v_masael){
?>

<h2 style="font-size: 18px"><?php echo $v_masael->masael_title;?></h2>
          <p class="infopost">Posted on <span class="date"><?php echo $v_masael->created_date_time;?></span> by <a href="#"><?php echo $v_masael->masael_author_name;?></a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com">Comments <span>11</span></a></p>
          <div class="clr"></div>
          
          <div class="post_content">
              <?php echo $v_masael->masael_short_description;?>
              <p class="spec"><a href="<?php echo base_url();?>welcome/masael_maincontent_details/<?php echo $v_masael->masael_id;?>" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="clr"></div>
<?php } ?>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>