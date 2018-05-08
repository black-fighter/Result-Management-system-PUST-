<script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(given_value, objID)
 {
	//var obj = document.getElementById(objID);
        //alert(objID);
        serverPage='<?php echo base_url()?>welcome/masael_search/'+given_value;
        //alert(serverPage);
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			document.getElementById(objID).innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
xmlhttp.send(null);
}
//-->
</script>



<header id="head" class="secondary">
    <div class="container">
        <h1>Sidebar Heading</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
    </div>
</header>

<!-- container -->
<section class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-md-8 maincontent">
            <br />
            <br />
            <?php echo $masael_maincontent; ?>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-md-4 sidebar sidebar-right">

            <div class="searchform">
                <?php
                if ($this->session->userdata('user_id')) {
                    ?>
                    <h2>Hello, <?php echo $this->session->userdata('user_name') ?></h2>
                <?php } ?>
                


                <div onload="makerequest(this.value, 'hw')">
                        
                    <form id="formsearch" name="formsearch" method="post" action="#">
                        <span>
                            <input type="text" id="search_text" onkeyup="makerequest(this.value, 'hw')">
                         </span>
                    </form>
                    
                        
                        <br/><hr/><br/>
                        <div id="hw"></div>
                </div>




            <?php
//            foreach ($all_published_masael_info as $v_masael) {
//                ?>
<!--                <ul>
                    <li><a href="//<?php //echo base_url(); ?>welcome/masaels.html"><?php //echo $v_masael->masael_title; ?> </a></li>
                </ul>-->
            <?php //} ?>

    </div>


    <div class="row panel">
        <div class="col-xs-12">
            <h2>Masael Category</h2>
            <?php
            foreach ($all_published_category as $v_category) {
                ?>
                <ul class="masael_category">
                    <li><a href="<?php echo base_url() ?>welcome/masael_by_category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                </ul>
            <?php } ?>
        </div>
    </div>

    <div class="row panel">
        <div class="col-xs-12">
            <h2>Recent Masael</h2>
            <?php
            foreach ($recent_masael_info as $v_masael) {
                ?>
                <ul class="masael_category">
                    <li><a href="<?php echo base_url() ?>welcome/masael_maincontent_details/<?php echo $v_masael->masael_id; ?>"><?php echo $v_masael->masael_title; ?></a></li>
                </ul>
            <?php } ?>
        </div>
    </div>

    <div class="row panel">
        <div class="col-xs-12">
            <h2>Popular Masael</h2>
            <?php
            foreach ($popular_masael_info as $v_masael) {
                ?>
                <ul class="masael_category">
                    <li><a href="<?php echo base_url() ?>welcome/masael_maincontent_details/<?php echo $v_masael->masael_id; ?>"><?php echo $v_masael->masael_title; ?></a></li>
                </ul>
            <?php } ?>
        </div>
    </div>

</aside>
<!-- /Sidebar -->

</div>
</section>