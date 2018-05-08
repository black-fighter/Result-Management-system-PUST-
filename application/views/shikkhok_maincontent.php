<?php
foreach ($shikkhok_maincontent as $v_maincontent) {
    ?>

    <h3><?php echo $v_maincontent->shikkhok_name; ?></h3>
    <p>
        <?php echo $v_maincontent->shikkhok_details; ?>
    </p>

<?php } ?>