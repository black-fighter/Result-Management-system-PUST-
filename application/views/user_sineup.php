<div class="mainbar">
        <div class="article">
          <h2><span>User Signup</span></h2>
          <div class="clr"></div>
          <h3>
              
          </h3>
        </div>
        <div class="article">
          
          <div class="clr"></div>
          <form action="<?php echo base_url();?>welcome/save_user" method="post" id="sendemail" onsubmit="return validateStandard(this)">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="user_name" name="admin_full_name" class="text" required regexp="JSVAL_RX_ALPHA"/>
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input id="user_email" name="admin_email_address" class="text" required regexp="JSVAL_RX_EMAIL"/>
              </li>
              <li>
                <label for="Password">Password</label>
                <input id="user_password" name="admin_password" type="password" />
              </li>

              <li>
                  <input type="submit" name="imageField" id="imageField" value="Submit" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>