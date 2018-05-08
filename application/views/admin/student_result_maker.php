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
                                <?php
                                    $course_code=array();
                                    $i=0;
                                    $j=0;
                                
                                    foreach ($subject_info_by_session as $v_subject) {
                                        $course_code[$i++] = $v_subject->course_code;
                                        $subject_id[$j++] = $v_subject->subject_id;
                                        global  $value_x;
                                        $value_x=$j;
                               ?>
                                <th><?php echo $course_code[$i-1] ?></th>
                                <?php } ?>
                                <th>Total</th>
                                <th>SGPA</th>
                            </tr>
                        </thead>   
                        <tbody>
                            <?php $y=0;?>
                            <?php foreach($student_info_by_session as $student_info){
                                $student_id[$y++] = $student_info->student_id;
                            ?>
                            <tr>
                                <td>
                                    <input type="text" class="span12 typeahead"  value="<?php echo $student_info->student_roll; ?>">
                                </td>
                                
                                <?php
                                    
                                                    $l=0;
                                       $n=0;$k=0;
                                       
                                       //for ($i = 0; $i < $value_x; $i++) {
                                       $a[15]=array();
                                       for($z=0;$z<$value_x+2;$z++){
                                           $a[$z]=-1;
                                       }
                                        foreach ($student_mark as $v_mark) {
                                                if ($student_id[$y-1] == $v_mark->student_id) {
                                               for ($x = 0; $x < $value_x; $x++) {
                                                   //$m=0;
                                                 if ($subject_id[$x] == $v_mark->subject_id){
                                                     $a[$x]=$v_mark->grade;
                                                     break;
                                                    }
                                                 }
                                               }
                                        }
                                                     //$k++;
                                        $total = 0;$b=0;$a_gpa=0;
                                                     for($z=0;$z<$value_x;$z++){
                                                        if($a[$z]!=-1){
                                                            ?>       
                                                        <td>
                                                            <input type="text" class="span12 typeahead"  value="<?php echo $a[$z];$total=$total+$a[$z];$b++;$a_gpa=$total / $b;  ?>">
                                                        </td>
                                                        <?php
                                                        }
                                                        elseif($a[$z] == -1){
                                                            ?><td>
                                                            <input type="text" class="span12 typeahead"  value="">
                                                            
                                                        </td><?php
                                                        }
                                                        
                                                    }
                                                    
                                                    
                                                       
                                                            ?><td>
                                                            <input type="text" class="span12 typeahead"  value="<?php echo round($total,2);?>">
                                                            
                                                        </td><?php
                                                        
                                                            ?><td>
                                                            <input type="text" class="span12 typeahead"  value="<?php echo round($a_gpa,2);?>">
                                                            
                                                        </td><?php
                                                    
                                                  }
                                                ?>
                                                    
                            </tr>
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
