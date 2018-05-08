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
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            $i=0;
            foreach ($madrasa_porichiti_info as $v_porichiti){
                $i++;
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td class="center"><?php echo $v_porichiti->madrasa_title;?></td>
                <td class="center"><?php echo chop_string($v_porichiti->madrasa_description, 300);?></td>
                
                <td class="center">
                    
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_madrasa_porichiti/<?php echo $v_porichiti->madrasa_id;?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <?php if(!$v_porichiti->madrasa_image){?>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_madrasa_porichiti/<?php echo $v_porichiti->madrasa_id;?>" title="Delete" onclick="return checkDelete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                    <?php } ?>
                </td>
            </tr>
            
                <?php   } ?>
        </tbody>
    </table>            
</div>