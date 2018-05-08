<div id="content" class="span10">
    <!-- content starts -->

    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Student's name </th>
                            <th>Roll </th>
                            <th>Session </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php
                        foreach($all_student_info as $v_student){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $v_student->student_name;?></td>
                            <td class="center"><?php echo  $v_student->student_roll;?></td>
                            <td class="center"><?php echo  $v_student->bivag_name;?></td>
                            <td class="center">
                                <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_category/<?php echo $v_student->student_id;?>" title="edit">
                                    <i class="icon-edit icon-white"></i>                                            
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_category/<?php echo $v_student->student_id;?>" title="delete" onclick="return checkDelete();">
                                    <i class="icon-trash icon-white"></i>
                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/add_student_mark/<?php echo $v_student->student_id;?>" title="mark">
                                    <i class="icon-trash icon-white"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>   
                    </tbody>
                </table>            
            </div>
        </div><!--/span-->

    </div><!--/row-->

    <!-- content ends -->
</div>