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
            <h2><i class="icon-edit"></i>Add All Student Mark</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_all_student_mark" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Add all Student Mark</legend>
                    <h3>
                        <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h3>
                    
                    
                    
                    
                    <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable">
                        <thead>
                            <tr>
                                <th>Student Roll</th>
                                <th>CA</th>
                                <th>Part A</th>
                                <th>Part B</th>
                                <th>Total</th>
                                <th>GPA</th>
                            </tr>
                        </thead>   
                        <tbody>
                            <?php $i=0;?>
                            <?php foreach($student_info_by_session as $student_info){?>
                            <tr>
                                <td>
                                    <input type="text" class="span12 typeahead"  value="<?php echo $student_info->student_roll; ?>">
                                    <input type="hidden" class="span12 typeahead" name="data[<?php echo $i; ?>][bivag_id]"  value="<?php echo $bivag_id; ?>">
                                    <input type="hidden" class="span12 typeahead" name="data[<?php echo $i; ?>][student_id]"  value="<?php echo $student_info->student_id; ?>">
                                    <input type="hidden" class="span12 typeahead" name="data[<?php echo $i; ?>][subject_id]"  value="<?php echo $subject_id; ?>">
                                </td>
                                <td>
                                    <input type="text" class="span12 typeahead" id="ca_<?php echo $i; ?>" name="data[<?php echo $i; ?>][ca]" onkeyup="copy_text_<?php echo $i; ?>();" >
                                </td>
                                <td>
                                    <input type="text" class="span12 typeahead" id="part_a_<?php echo $i; ?>" name="data[<?php echo $i; ?>][part_a]" onkeyup="copy_text_<?php echo $i; ?>();" >
                                </td>
                                <td>
                                    <input type="text" class="span12 typeahead" id="part_b_<?php echo $i; ?>" name="data[<?php echo $i; ?>][part_b]" onkeyup="copy_text_<?php echo $i; ?>();" >
                                </td>
                                
                                <script>         
                                        function copy_text_<?php echo $i; ?>()
                                        {

                                                var total_mark=+document.getElementById('ca_<?php echo $i; ?>').value + +document.getElementById('part_a_<?php echo $i; ?>').value + +document.getElementById('part_b_<?php echo $i; ?>').value;
                                                document.getElementById('total_<?php echo $i; ?>').value=total_mark;

                                                if(total_mark>=80){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=4.0;
                                                }
                                                else if(total_mark>=75){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=3.75;
                                                }
                                                else if(total_mark>=70){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=3.5;
                                                }
                                                else if(total_mark>=65){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=3.25;
                                                }
                                                else if(total_mark>=60){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=3.0;
                                                }
                                                else if(total_mark>=55){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=2.75;
                                                }
                                                else if(total_mark>=50){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=2.5;
                                                }
                                                else if(total_mark>=45){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=2.25;
                                                }
                                                else if(total_mark>=40){
                                                    document.getElementById('grade_<?php echo $i; ?>').value=2.0;
                                                }
                                                else{
                                                    document.getElementById('grade_<?php echo $i; ?>').value=0.0;
                                                }

                                        }
                                </script>
                               
                                <td>
                                    <input type="text" class="span12 typeahead"  id="total_<?php echo $i; ?>"  name="data[<?php echo $i; ?>][total]" >
                                </td>
                                <td>
                                    <input type="text" class="span12 typeahead" id="grade_<?php echo $i; ?>" name="data[<?php echo $i; ?>][grade]" >
                                </td>
                            </tr>
                            <?php $i++;} ?>
                            <tr class="form-actions">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="reset" class="btn">Cancel</button>
                            </tr>
                        </tbody>
                    </table>            
                </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
                    
                    