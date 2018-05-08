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
            <h2><i class="icon-edit"></i>Add Madrasa Porichiti</h2>
            <h3>

            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_boyan" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Add Boyan</legend>
                    <h3>
                        <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h3>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Title </label>

                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="boyan_title" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Boyan</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file" name="boyan">
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