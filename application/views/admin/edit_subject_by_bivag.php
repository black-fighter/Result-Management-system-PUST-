<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Edit Syllabus by session</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" name="edit_subject" action="<?php echo base_url();?>super_admin/update_subject_by_bivag" method="post">
                <fieldset>
                    <legend>Edit Syllabus by session</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Session </label>
                        <div class="controls">
                            
                            <select name="bivag_id">
                                <option>Select Bivag name...</option>
                                <?php
                                foreach ($bivag_info as $v_info){    
                                ?>
                                <option value="<?php echo $v_info->bivag_id;?>"><?php echo $v_info->bivag_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course Title </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="subject_name" value="<?php echo $subject_info_by_id->subject_name;?>">
                            <input type="hidden" name="subject_id" value="<?php echo $subject_info_by_id->subject_id;?>" >
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course Code</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="course_code" value="<?php echo $subject_info_by_id->course_code;?>" >
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Credit</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="credit" value="<?php echo $subject_info_by_id->credit;?>"  >
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">
document.forms['edit_subject'].elements['bivag_id'].value='<?php echo $subject_info_by_id->bivag_id;?>';
</script>