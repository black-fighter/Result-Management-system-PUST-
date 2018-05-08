<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Comments Id</th>
                <th>Comments</th>
                <th>Publication Status</th>
                <th>Actions</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            foreach ($all_comments_info as $v_comments){
            ?>
            <tr>
                <td><?php echo $v_comments->comments_id;?></td>
                <td class="center"><?php echo $v_comments->comments;?></td>
                <td class="center">
                    <?php 
                    if($v_comments->publication_status==1){
                        echo "Published";
                    }
                    else {
                        echo "Unpublished";
                    }
                    ?>
                </td>
                <td class="center">
                    <?php
                    if($v_comments->publication_status==0){
                    ?>
                    <a class="btn btn-success" href="<?php echo base_url();?>super_admin/published_comments_info/<?php echo $v_comments->comments_id;?>" title="Published">
                        <i class="icon-arrow-up icon-white"></i>  
                                                             
                    </a>
                    <?php }
                    else{
                    ?>
                        <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_comments_info/<?php echo $v_comments->comments_id;?>" title="Unpublished">
                        <i class="icon-arrow-down icon-white"></i>  
                                                              
                    </a>
                    <?php } ?>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_comments/<?php echo $v_comments->comments_id;?>" title="Delete" onclick="return checkDelete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>            
</div>