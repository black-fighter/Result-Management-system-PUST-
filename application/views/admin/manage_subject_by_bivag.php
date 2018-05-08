<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Session</th>
                <th> Course Title</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            $x = 0;
            $i = 0;
            $j = 0;
            $l = 0;
            $m = 0;
            $n=0;
            //$k = 1;
            global $bivag;
            $bivag = array();
            foreach ($subject_by_bivag_info as $v_subject) {

                $k = 1;
                $bivag[$i++] = $bivag_id = $v_subject->bivag_id;
                for ($j = 0; $j < $i - 1; $j++) {
                    if ($bivag[$j] == $bivag_id) {
                        $k++;
                    }
                }
                if ($k > 1) {
                    continue;
                }


                //$m = 0;
                //foreach ($subject_by_bivag_info as $v_subject) {
                //$x++;
                ?>
                <?php
                $n=0;
                foreach ($subject_by_bivag_info as $v_subject1) {
                    if ($bivag_id == $v_subject1->bivag_id) {
                      $n++;  
//                      //$x++;
//
//                        $bivag1[$l++] = $bivag_id1 = $v_subject1->bivag_id;
//                        for ($m = 0; $m < $l - 1; $m++) {
//                            if ($bivag1[$m] == $bivag_id1) {
//                                $n++;
//                            }
//                        }
                        ?>
                        <?php if ($n == 1) { ?>
                        <tr>
                                <td class="center"><?php
                                echo $v_subject->bivag_name;           // echo '<pre>';
//                                print_r($n);
//                                print_r($bivag_id);
                                ?></td>
                                <td class="center"><?php
                            echo $v_subject1->subject_name; //echo '<pre>';
//                             //print_r($x);
//                             print_r($bivag_id);
                            ?>






                            <td class="center">


                                <a class="btn btn-info" href="<?php echo base_url();    ?>super_admin/edit_subject_by_bivag/<?php echo $v_subject1->subject_id;    ?>" title="Edit">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url();    ?>super_admin/delete_subject_by_bivag/<?php echo $v_subject1->subject_id;    ?>" title="Delete" onclick="return checkDelete();">
                                    <i class="icon-trash icon-white"></i> 

                                </a>
                            </td>
                            <?php
                            //}
//                    }
//                    
                            ?>
                        
            <?php //} ?>

</tr>
                        <?php }else{?>
            
<tr>
                                <td class="center"><?php
                                echo $v_subject->bivag_name;            //echo '<pre>';
//                                print_r($n);
//                                print_r($bivag_id);
                                ?></td>
                                <td class="center"><?php
                            echo $v_subject1->subject_name; //echo '<pre>';
//                             //print_r($x);
//                             print_r($bivag_id);
                            
                            ?></td>






                            <td class="center">


                                <a class="btn btn-info" href="<?php echo base_url();    ?>super_admin/edit_subject_by_bivag/<?php echo $v_subject1->subject_id;    ?>" title="Edit">
                                    <i class="icon-edit icon-white"></i>  

                                </a>
                                <a class="btn btn-danger" href="<?php echo base_url();    ?>super_admin/delete_subject_by_bivag/<?php echo $v_subject1->subject_id;    ?>" title="Delete" onclick="return checkDelete();">
                                    <i class="icon-trash icon-white"></i> 

                                </a>
                            </td>
                            <?php
                            //}
//                    }
//                    
                            ?>
                        
            <?php //} ?>

</tr>
                        <?php } ?>

                        <?php
                    }
                }
                ?>

            <?php } ?>
        </tbody>
    </table>            
</div>