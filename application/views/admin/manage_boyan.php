<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Boyan Id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            $i=0;
            foreach ($boyan_info as $v_boyan){
                $i++;
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td class="center"><?php echo $v_boyan->boyan_title;?></td>
                
                <td class="center">
                    
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>super_admin/edit_boyan/<?php echo $v_boyan->boyan_id;?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a>
                </td>
            </tr>
            
                <?php   } ?>
        </tbody>
    </table>            
</div>