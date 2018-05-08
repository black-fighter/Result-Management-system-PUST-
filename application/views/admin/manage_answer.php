<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>প্রশ্ন নং</th>
                <th>প্রশ্ন</th>
                <th>উত্তর</th>
                <th>Publication Status</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            foreach ($all_question_info as $v_question){
                $k=0;
                foreach ($all_answer_info as $v_answer){
            ?>
            <?php if($v_question->question_id==$v_answer->question_id){?>
            <tr>
                <td><?php echo $v_question->question_id;?></td>
                <td class="center"><?php echo $v_question->question;?></td>
                <td class="center"><?php echo $v_answer->short_answer;?></td>
                <td class="center">
                    <?php 
                    if($v_answer->publication_status==1){
                        echo "Published";
                    }
                    else {
                        echo "Unpublished";
                    }
                    ?>
                </td>
                <td class="center">
                    <?php
                    if($v_answer->publication_status==0){
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_answer_info/<?php echo $v_answer->answer_id;?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  
                                                             
                    </a>
                    <?php }
                    else{
                    ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_answer_info/<?php echo $v_answer->answer_id;?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                    <?php } ?>
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_answer/<?php echo $v_answer->question_id;?>" title="Update answer">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_answer/<?php echo $v_answer->question_id;?>" title="Delete" onclick="return checkDelete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
                <?php 
               $k++; } }
               
//                echo '<pre>';
//                print_r($k);
               
                if($k==1){
                continue;
                }
                
                ?>
            
            <tr>
                <td><?php echo $v_question->question_id;?></td>
                <td class="center"><?php echo $v_question->question;?></td>
                <td class="center"><?php //echo $v_blog->blog_author_name;?></td>
                <td class="center">
                    <?php 
//                    if($v_blog->publication_status==1){
//                        echo "Published";
//                    }
//                    else {
//                        echo "Unpublished";
//                    }
                    ?>
                </td>
                <td class="center">
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/give_answer/<?php echo $v_question->question_id;?>" title="Give answer">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_question/<?php echo $v_question->question_id;?>" title="Delete" onclick="return checkDelete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
            
            
                <?php   } ?>
        </tbody>
    </table>            
</div>