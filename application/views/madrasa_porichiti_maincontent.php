<?php
foreach ($madrasa_maincontent as $v_madrasa) {
    ?>

    <h3><?php echo $v_madrasa->madrasa_title; ?></h3>
    <?php if ($v_madrasa->madrasa_image) { ?>
        <p>
            <img src="<?php echo base_url() . $v_madrasa->madrasa_image; ?>" alt="" class="img-rounded pull-right" width="300">
            <?php echo $v_madrasa->madrasa_description; ?>
        </p>
    <?php } ?>
    <p>
        <?php echo $v_madrasa->madrasa_description; ?>
    </p>

<?php } ?>