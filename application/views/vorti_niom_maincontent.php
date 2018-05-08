<?php
foreach ($vorti_niom_content as $v_maincontent) {
    ?>

    <h3><?php echo $v_maincontent->vorti_title; ?></h3>
    <p>
        <?php echo $v_maincontent->vorti_details; ?>
    </p>

<?php } ?>