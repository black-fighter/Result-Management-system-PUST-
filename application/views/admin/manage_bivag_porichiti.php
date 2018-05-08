<?php
if (!function_exists('chop_string')) {

    function chop_string($str, $len) {
        if (strlen($str) < $len)
            return $str;

        $str = substr($str, 0, $len);
        if ($spc_pos = strrpos($str, " "))
            $str = substr($str, 0, $spc_pos);

        return $str . "...";
    }

}
?>


<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Serial no</th>
                <th>Bivag Name</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            $i=0;
            foreach ($bivag_porichiti_info as $v_porichiti){
                $i++;
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td class="center"><?php echo $v_porichiti->bivag_name;?></td>
                
                <td class="center">
                    
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_bivag_porichiti/<?php echo $v_porichiti->bivag_id;?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_bivag_porichiti/<?php echo $v_porichiti->bivag_id;?>" title="Delete" onclick="return checkDelete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
            
                <?php   } ?>
        </tbody>
    </table>            
</div>