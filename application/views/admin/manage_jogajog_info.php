<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Bank Name</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            $i=0;
            foreach ($jogajog_info as $v_jogajog){
                $i++;
            ?>
            <tr>
                <td><?php echo $v_jogajog->name;?></td>
                <td class="center"><?php echo $v_jogajog->phone;?></td>
                <td class="center"><?php echo $v_jogajog->bank_name;?></td>
                
                <td class="center">
                    
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_jogajog_info/<?php echo $v_jogajog->jogajog_id;?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                </td>
            </tr>
            
                <?php   } ?>
        </tbody>
    </table>            
</div>