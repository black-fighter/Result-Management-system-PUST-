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
            <h2><i class="icon-edit"></i>Edit Protisthata Porichiti</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php if($protisthata_porichiti_info_by_id->protisthata_image){?>
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/update_protisthata_porichiti_with_image" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Edit Protisthata Porichiti</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="protisthata_title"  value="<?php echo $protisthata_porichiti_info_by_id->protisthata_title;?>">
                            <input type="hidden" name="protisthata_id" value="<?php echo $protisthata_porichiti_info_by_id->protisthata_id?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="protisthata_description" id="textarea2" rows="3"><?php echo $protisthata_porichiti_info_by_id->protisthata_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file" name="protisthata_image">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>
            
            <?php }else{ ?>
            
            
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/update_protisthata_porichiti_without_image" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Edit Protisthata Porichiti</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="protisthata_title"  value="<?php echo $protisthata_porichiti_info_by_id->protisthata_title;?>">
                            <input type="hidden" name="protisthata_id" value="<?php echo $protisthata_porichiti_info_by_id->protisthata_id?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="protisthata_description" id="textarea2" rows="3"><?php echo $protisthata_porichiti_info_by_id->protisthata_description;?></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>
<?php } ?>
        </div>
    </div><!--/span-->

</div><!--/row-->