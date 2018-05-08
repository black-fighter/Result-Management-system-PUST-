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
            <h2><i class="icon-edit"></i>Edit Vorti Fee</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form name="vorti_fee" class="form-horizontal" action="<?php echo base_url();?>super_admin/update_vorti_fee" method="post">
                <fieldset>
                    <legend>Edit Vorti Fee</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="title" value="<?php echo $vorti_fee_info_by_id->title;?>" >
                            <input type="hidden" name="fee_id" value="<?php echo $vorti_fee_info_by_id->fee_id;?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Bivag Category</label>
                        <div class="controls">
                            
                            <select name="bivag_id">
                                <option>Select Bivag name...</option>
                                <?php
                                foreach ($bivag_category as $v_category){    
                                ?>
                                <option value="<?php echo $v_category->bivag_id;?>"><?php echo $v_category->bivag_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Fee </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="fee_amount" value="<?php echo $vorti_fee_info_by_id->fee_amount;?>" >
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
<script type="text/javascript">
document.forms['vorti_fee'].elements['bivag_id'].value='<?php echo $vorti_fee_info_by_id->bivag_id;?>';
</script>