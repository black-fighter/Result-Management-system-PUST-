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
            <form class="form-horizontal" method="post" action="<?php echo base_url();?>super_admin/save_bivag_category">
                <fieldset>
                    <legend>Add Bivag Category</legend>
                    <h3>
                        
                    </h3>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Bivag Name </label>
                        <div class="controls">
                            <input  name="bivag_name" type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" >
                        </div>
                    </div>          
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Bivag Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3"  name="bivag_description"></textarea>
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