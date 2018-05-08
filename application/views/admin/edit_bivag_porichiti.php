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
            <h2><i class="icon-edit"></i>বিভাগ সমুহ</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/update_bivag_porichiti" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>বিভাগ সমুহ</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Session </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="bivag_name"  value="<?php echo $bivag_porichiti_info_by_id->bivag_name;?>">
                            <input type="hidden" name="bivag_id" value="<?php echo $bivag_porichiti_info_by_id->bivag_id;?>" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Result Category </label>
                        <div class="controls">
                            
                            <select name="r_category_id">
                                <option>Result Category...</option>
                                <?php
                                foreach ($result_category as $v_info){    
                                ?>
                                <option value="<?php echo $v_info->r_category_id;?>"><?php echo $v_info->result_category;?></option>
                                <?php } ?>
                            </select>
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