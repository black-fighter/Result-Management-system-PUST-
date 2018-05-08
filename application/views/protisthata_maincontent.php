<?php
foreach ($protisthata_maincontent as $v_maincontent) {
    ?>

    <h3><?php echo $v_maincontent->protisthata_title; ?></h3>
    <?php if ($v_maincontent->protisthata_image) { ?>
        <p>
            <img src="<?php echo base_url() . $v_maincontent->protisthata_image; ?>" alt="" class="img-rounded pull-right" width="300">
            <?php echo $v_maincontent->protisthata_description; ?>
        </p>
    <?php } ?>
    <p>
        <?php echo $v_maincontent->protisthata_description; ?>
    </p>

<?php } ?>