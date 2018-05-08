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
            <h2><i class="icon-edit"></i>Edit Masael</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form name="edit_masael" class="form-horizontal" action="<?php echo base_url();?>super_admin/update_masael" method="post">
                <fieldset>
                    <legend>Edit Masael</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="masael_title" value="<?php echo $masael_info->masael_title?>" >
                            <input type="hidden" name="masael_id" value="<?php echo $masael_info->masael_id?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            
                            <select name="category_id">
                                <option>Select category name...</option>
                                <?php
                                foreach ($published_category_info as $v_category){    
                                ?>
                                <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Masael Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="masael_short_description" id="textarea2" rows="3"><?php echo $masael_info->masael_short_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Masael Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="masael_long_description" id="textarea2" rows="3"><?php echo $masael_info->masael_long_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Status...</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
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
<script type="text/javascript">
document.forms['edit_masael'].elements['category_id'].value='<?php echo $masael_info->category_id;?>';
document.forms['edit_masael'].elements['publication_status'].value='<?php echo $masael_info->publication_status;?>';
</script>