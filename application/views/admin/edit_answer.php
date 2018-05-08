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
            <h2><i class="icon-edit"></i>Add Blog</h2>
            <h3>
                
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form name="edit_answer" class="form-horizontal" action="<?php echo base_url();?>super_admin/update_answer" method="post">
                <fieldset>
                    <legend>Add Blog</legend>
                    <h3>
                        
                    </h3>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">প্রশ্ন</label>
                        <div class="controls">
                            <textarea class="cleditor" name="question" id="textarea2"><?php echo $answer_info_by_id->question?></textarea>
                            <input type="hidden" name="question_id" value="<?php echo $answer_info_by_id->question_id?>" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title </label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="answer_title"  value="<?php echo $answer_info_by_id->answer_title?>" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category</label>
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
                        <label class="control-label" for="textarea2">সংক্ষেপে উত্তর</label>
                        <div class="controls">
                            <textarea class="cleditor" name="short_answer" id="textarea2" rows="3"><?php echo $answer_info_by_id->short_answer?> </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">বিস্তারিত</label>
                        <div class="controls">
                            <textarea class="cleditor" name="long_answer" id="textarea2" rows="3"><?php echo $answer_info_by_id->long_answer?> </textarea>
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
document.forms['edit_answer'].elements['category_id'].value='<?php echo $answer_info_by_id->category_id;?>';
document.forms['edit_answer'].elements['publication_status'].value='<?php echo $answer_info_by_id->publication_status;?>';
</script>