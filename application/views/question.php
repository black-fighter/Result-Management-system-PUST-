<div class="mainbar">
    <div class="article">
        <h2><span>User Signup</span></h2>
        <div class="clr"></div>
        <h3>

        </h3>
    </div>
    <div class="article">

        <div class="clr"></div>
        <form action="<?php echo base_url(); ?>welcome/save_jiggasa" method="post" id="sendemail" onsubmit="return validateStandard(this)">
            <ol>
                <li>
                    <label for="name">আপনার প্রশ্ন  (required)</label>
<!--                    <input id="user_name" name="user_name" class="text" required regexp="JSVAL_RX_ALPHA"/>-->
                    <textarea class="textarea" name="question" class="text" required></textarea>
                </li>
                <li>
                    <input type="submit" name="imageField" id="imageField" value="Submit" src="images/submit.gif" class="send" />
                    <div class="clr"></div>
                </li>
            </ol>
        </form>
    </div>
</div>