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
            <h2><i class="icon-edit"></i>যোগাযোগ ঠিকানা</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_jogajog_info" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>যোগাযোগ ঠিকানা</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">নাম</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="name" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">পেশা</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="pesha" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">ফোন</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="phone" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">ব্যাংকের নাম</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="bank_name" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">ব্যাংকের বিস্তারিত তথ্য</label>
                        <div class="controls">
                            <textarea class="cleditor" name="bank_details" id="textarea2" rows="3"></textarea>
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