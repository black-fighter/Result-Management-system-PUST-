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
            <h2><i class="icon-edit"></i>Student Info</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/add_all_student_mark" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Student Info</legend>
                    <h3>
                        
                    </h3>
                    
                    <?php global $i;
                        $i=0;
                    ?>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Session</label>
                        <div class="controls">
                            
                            <select name="bivag_id" onchange="increment()">
                                <option>Select Session...</option>
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
                    
                    
                    <script id="withIframe" type="text/template">
                        <p>With Iframe</p>
                        <p><?php $i=1;echo $i;?></p>
                    </script>
                    <div id="holder"></div>
                    <script>
                        increment(){
                            i=1;
                            document.write(i);
                        var iframe = document.getElementById("withIframe").innerHTML;
                        document.getElementById("holder").innerHTML = iframe;
                        }
                    </script>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Subject</label>
                        <div class="controls">
                            
                            <select name="subject_id">
                                <option>Select Subject...</option>
                                <?php
                                foreach ($subject_info as $v_info){    
                                ?>
                                <option value="<?php echo $v_info->subject_id;?>"><?php echo $v_info->subject_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->