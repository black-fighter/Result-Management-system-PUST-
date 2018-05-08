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
            <h2><i class="icon-edit"></i>Add Student Mark</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_student_mark" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Add Student Mark</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Subject Name </label>
                        <div class="controls">
                            
                            <select name="subject_id">
                                <option>Select Course name...</option>
                                <?php
                                
                                foreach ($student_info as $v_info){
                                    $value=0;
                                    foreach ($student_mark as $v_mark){
                                        if($v_mark->student_id==$v_info->student_id && $v_mark->subject_id==$v_info->subject_id)
                                            {
                                            $value=1;
                                            }
                                   
                                    }
                                     if($value==1){
                                        continue;
                                    }
                                ?>
                                <option value="<?php echo $v_info->subject_id;?>"><?php echo $v_info->subject_name;?></option>
                                
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">CA </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="ca" name="ca" onkeyup="copy_text();">
                            <input type="hidden" name="student_id" value="<?php echo $student_id;?>">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Part A </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="part_a" name="part_a" onkeyup="copy_text();">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Part B </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="part_b" name="part_b" onkeyup="copy_text();">
                        </div>
                    </div>
                    
                    <script>         
                            function copy_text()
                            {
                                
                                    var total_mark=+document.getElementById('ca').value + +document.getElementById('part_a').value + +document.getElementById('part_b').value;
                                    document.getElementById('total').value=total_mark;
                                    
                                    if(total_mark>=80){
                                        document.getElementById('grade').value=4.0;
                                    }
                                    else if(total_mark>=75){
                                        document.getElementById('grade').value=3.75;
                                    }
                                    else if(total_mark>=70){
                                        document.getElementById('grade').value=3.5;
                                    }
                                    else if(total_mark>=65){
                                        document.getElementById('grade').value=3.25;
                                    }
                                    else if(total_mark>=60){
                                        document.getElementById('grade').value=3.0;
                                    }
                                    else if(total_mark>=55){
                                        document.getElementById('grade').value=2.75;
                                    }
                                    else if(total_mark>=50){
                                        document.getElementById('grade').value=2.5;
                                    }
                                    else if(total_mark>=45){
                                        document.getElementById('grade').value=2.25;
                                    }
                                    else if(total_mark>=40){
                                        document.getElementById('grade').value=2.0;
                                    }
                                    else{
                                        document.getElementById('grade').value=0.0;
                                    }
                                
                            }
                    </script>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Total</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead"  id="total"  name="total" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Grade </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="grade" name="grade" >
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