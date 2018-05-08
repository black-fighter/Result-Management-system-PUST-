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
            <h2><i class="icon-edit"></i>Add Syllabus by session</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_subject_by_bivag" method="post">
                <fieldset>
                    <legend>Add Syllabus by session</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Session </label>
                        <div class="controls">
                            
                            <select name="bivag_id">
                                <option>Select session...</option>
                                <?php
                                foreach ($bivag_info as $v_info){    
                                ?>
                                <option value="<?php echo $v_info->bivag_id;?>"><?php echo $v_info->bivag_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Year </label>
                        <div class="controls">
                            
                            <select name="year_id">
                                <option>Select year...</option>
                                <?php
                                foreach ($year_info as $v_info){    
                                ?>
                                <option value="<?php echo $v_info->year_id;?>"><?php echo $v_info->year;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Semester </label>
                        <div class="controls">
                            
                            <select name="semester_id">
                                <option>Select semester...</option>
                                <?php
                                foreach ($semester_info as $v_info){    
                                ?>
                                <option value="<?php echo $v_info->semester_id;?>"><?php echo $v_info->semester;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course Title</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="subject_name" >
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course Code</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="course_code" >
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Credit</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="credit" >
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