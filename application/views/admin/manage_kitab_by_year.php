<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>জামাত</th>
                <th>কিতাবের নাম</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            foreach ($kitab_by_year_info as $v_kitab_by_year){
            ?>
            <tr>
                <td class="center"><?php echo $v_kitab_by_year->jamat_name;?></td>
                <td class="center"><?php echo $v_kitab_by_year->kitab_name;?></td>
                
                <td class="center">
                    
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_kitab_by_year/<?php echo $v_kitab_by_year->yearly_kitab_id;?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                    <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_kitab_by_year/<?php echo $v_kitab_by_year->yearly_kitab_id;?>" title="Delete" onclick="return checkDelete();">
                        <i class="icon-trash icon-white"></i> 
                       
                    </a>
                </td>
            </tr>
            
                <?php   } ?>
        </tbody>
    </table>            
</div>