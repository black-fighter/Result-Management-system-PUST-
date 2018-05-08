<?php
foreach ($boyan_maincontent as $v_maincontent) {
    ?>
    <!--    <audio controls>
            <source src="<?php //echo base_url() . $v_maincontent->boyan;    ?>">
        </audio>-->
    <!--    <video controls>
            <source src="<?php //echo base_url() . $v_maincontent->boyan;   ?>">
        </video>-->
    
    <video width="320" height="240" controls>
        <source src="<?php echo base_url() . $v_maincontent->boyan; ?>">
        Your browser does not support the video tag.
    </video>
    <a title="Click to download" href="<?php echo base_url() ?>welcome/download/<?php echo $v_maincontent->boyan_id; ?>" >Download</a>




<?php } ?>