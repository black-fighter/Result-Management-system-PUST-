<?php
foreach ($bivag_maincontent as $v_maincontent) {
    ?>

    <h3><?php echo $v_maincontent->bivag_name; ?></h3>
    <p>
        <?php echo $v_maincontent->bivag_details; ?>
    </p>

<?php } ?>