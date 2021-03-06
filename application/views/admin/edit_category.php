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
            <h2><i class="icon-edit"></i> Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form name="edit_category" class="form-horizontal" method="post" action="<?php echo base_url();?>super_admin/update_category">
                <fieldset>
                    <legend>Edit Category</legend>
                    <h3>
                        <?php 
                            $msg=$this->session->userdata('message');
                            echo $msg;
                       ?>
                    </h3>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <input  name="category_name" type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" value="<?php echo $category_info->category_name;?>" >
                            <input  name="category_id" type="hidden" value="<?php echo $category_info->category_id;?>" >
                        </div>
                    </div>          
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3"  name="category_description"><?php echo $category_info->category_description;?></textarea>
                        </div>
                    </div>         
                    <div class="control-group">
                        <label class="control-label" >Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option value="">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">
document.forms['edit_category'].elements['publication_status'].value='<?php echo $category_info->publication_status;?>';
</script>