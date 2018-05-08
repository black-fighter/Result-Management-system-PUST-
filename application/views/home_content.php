<?php
if (!function_exists('chop_string')) {

    function chop_string($str, $len) {
        if (strlen($str) < $len)
            return $str;

        $str = substr($str, 0, $len);
        if ($spc_pos = strrpos($str, " "))
            $str = substr($str, 0, $spc_pos);

        return $str . "...";
    }

}
?>

<!-- /Header -->



<header id="head">
    <div class="container">
        <div class="heading-text">							
            <h1 class="animated flipInY delay1">Start Online Education</h1> <br/>
            <p>Free Online education template for elearning and online education institute.</p>
        </div>

        <div class="fluid_container">

            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <?php
                foreach ($slider_image as $v_image) {
                    ?>
                    <div data-src="<?php echo base_url() . $v_image->slider_image; ?>">

                    </div>  
                <?php } ?>
            </div><!-- #camera_wrap_3 -->
        </div><!-- .fluid_container -->
    </div>
</header>






<section class="news-box top-margin">
    <div class="container">
        <h2><span>New Courses</span></h2>
        <div class="row">
            <?php
            foreach ($protisthata_maincontent as $v_protisthata) {
                if ($v_protisthata->protisthata_image != NULL) {
                    ?>

            <a href="<?php echo base_url();?>welcome/protisthata" title="read more" class="btn-inline " target="_self">
            
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="newsBox">
                            <div class="thumbnail">
                                <figure><img src="<?php echo base_url() . $v_protisthata->protisthata_image; ?>" alt=""></figure>
                                <div class="caption maxheight2">
                                    <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h5>প্রতিষ্ঠাতা :</h5></p>
                                            <p><?php
                                                echo chop_string($v_protisthata->protisthata_description, 300);
                                                ?>
                                            </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </a>
            
                    <?php
                }
            }
            ?>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="newsBox">
                    <div class="thumbnail">
                        <figure><img src="<?php echo base_url(); ?>assets/images/news3.jpg" alt=""></figure>
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title"><h5>Photography   </h5></p>
                                    <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <div class="col-lg-4 col-md-4 col-sm-12"><div class="title-box clearfix "><h2 class="title-box_primary">জামিয়ার সংবাদ</h2></div>
                <?php
                foreach ($jamiar_songbad as $v_songbad) {
                    ?>
                    <div class="list styled custom-list">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>welcome/songbad_details/<?php echo $v_songbad->songbad_id; ?>"><?php echo $v_songbad->title; ?></a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>


        </div>
    </div>
</section>


<section class="container">
    <div class="row">

        <?php
        foreach ($madrasa_porichiti as $v_porichiti) {
            if ($v_porichiti->madrasa_image != NULL) {
                ?>


                <div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary"><?php echo $v_porichiti->madrasa_title; ?></h2></div> 
        <!--            <p><?php //echo $v_porichiti->madrasa_description;      ?></p>-->

                    <p>
                        <img src="<?php echo base_url() . $v_porichiti->madrasa_image; ?>" alt="" class="img-rounded pull-right" width="300">
                        <?php
                        echo chop_string($v_porichiti->madrasa_description, 1500);
                        ?>
                    </p>


                    <a href="<?php echo base_url();?>welcome/about" title="read more" class="btn-inline " target="_self">read more</a> </div>
                <?php
            }
        }
        ?>
        <div class="col-md-4"> 
            <div class="row panel">
                <div class="col-xs-12">
                    <h2>Masael Category</h2>
                    <?php
                    foreach ($all_published_category as $v_category) {
                        ?>
                        <ul class="blog_category">
                            <li><a href="<?php echo base_url() ?>welcome/blog_by_category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>