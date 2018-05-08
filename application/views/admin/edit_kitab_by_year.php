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
            <form class="form-horizontal" action="<?php echo base_url();?>super_admin/update_kitab_by_year" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>বিভাগ সমুহ</legend>
                    <h3>
                        
                    </h3>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">জামাত</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="jamat_name" value="<?php echo $yearly_kitab_info_by_id->jamat_name;?>" >
                            <input type="hidden" name="yearly_kitab_id" value="<?php echo $yearly_kitab_info_by_id->yearly_kitab_id;?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">কিতাবের নাম</label>
                        <div class="controls">
                            <textarea class="cleditor" name="kitab_name" id="textarea2" rows="3"><?php echo $yearly_kitab_info_by_id->kitab_name;?></textarea>
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