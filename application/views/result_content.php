<header id="head" class="secondary">
    <div class="container">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
    </div>
</header>
<!-- container -->
<section class="container">
    <div class="row">
        <!-- main content -->
        <section class="col-sm-8 maincontent">


            <?php echo $result_content;?>
            <!--Outside-->
        </section>










        <!-- /main -->

        <!-- Sidebar -->
        <aside class="col-md-4 sidebar sidebar-right">

            <div class="searchform">
                <?php
                if ($this->session->userdata('user_id')) {
                    ?>
                    <h2>Hello, <?php echo $this->session->userdata('user_name') ?></h2>
                <?php } ?>
                <form id="formsearch" name="formsearch" method="post" action="#">
                    <span>
                        <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" placeholder="Search our site:" type="text" />
                    </span>
                    <input type="submit" name="btn" value="Search"/>
                </form>
            </div>


            <div class="row panel">
                <div class="col-xs-12">
                    <h2>Blog Category</h2>
                    <?php
                    foreach ($all_published_category as $v_category) {
                        ?>
                        <ul class="blog_category">
                            <li><a href="<?php echo base_url() ?>welcome/blog_by_category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>

            <div class="row panel">
                <div class="col-xs-12">
                    <h2>Recent Blog</h2>
                    <?php
                    foreach ($recent_blog_info as $v_blog) {
                        ?>
                        <ul class="blog_category">
                            <li><a href="<?php echo base_url() ?>welcome/blog_maincontent_details/<?php echo $v_blog->blog_id; ?>"><?php echo $v_blog->blog_title; ?></a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>

            <div class="row panel">
                <div class="col-xs-12">
                    <h2>Popular Blog</h2>
                    <?php
                    foreach ($popular_blog_info as $v_blog) {
                        ?>
                        <ul class="blog_category">
                            <li><a href="<?php echo base_url() ?>welcome/blog_maincontent_details/<?php echo $v_blog->blog_id; ?>"><?php echo $v_blog->blog_title; ?></a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</section>
