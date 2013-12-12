<?php
require_once dirname(__FILE__).'/accesscheck.php';

	     if (TEST)
  print $GLOBALS['I18N']->get('default login is')." admin, ".$GLOBALS['I18N']->get('with password')." admin";

if (isset($_GET['page']) && $_GET["page"]) {
  $page = $_GET["page"];
  if (!is_file($page.".php") || $page == "logout") {
    $page = "home";
  }
} else {
  $page = "home";
}
if (!isset($GLOBALS['msg'])) $GLOBALS['msg'] = '';
?>


<script type="text/javascript" src="js/ui/effects.blind.js"></script>
<script type="text/javascript" src="js/ui/effects.drop.js"></script>

<style type="text/css">
	.toggler { width: 500px; height: 200px; }
	#fbval { padding: .5em 1em; text-decoration: none; }
	#effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
	#effect h3 { margin: 0; padding: 0.4em; text-align: center; }
	.ui-effects-transfer { border: 2px dotted gray; } 
</style>
<script type="text/javascript">
jQuery(function() { 
	jQuery(function() { jQuery("#effect").hide(); } );	  
	//run the currently selected effect
	function runEffect(){
		//get effect type from 
		var selectedEffect = "blind";
		//run the effect
		jQuery("#effect").toggle(selectedEffect,400);
	};
	
	//set effect from select menu value
	jQuery("#fbval").click(function() {
		runEffect();
		return false;
	});
});
</script>
<hr/>
<center>
     <table border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="mailtics-left-img">
          
        </td>
        <td>

          <table width="100%" border="0">
            <tr>
              <td align="center" valign="top" style="border:none;vertical-align:text-top;">

                <form method="post" action="">
                  <input type=hidden name="page" value="<?php echo $page?>">
                  <div style="border:0px solid #998899; width:400px; height:auto;; align=left;">

                  <div style="border:0px solid red;" class="login-txt"><h4><?php echo $GLOBALS['I18N']->get('Login to your account')?></h4></div>
                  <p>
                  <div id="login" style="border:1px dotted lightgray; height:115px; padding:10px 10px 10px 10px;">

                    <div><font class="error"><?php echo $GLOBALS['msg']?></font></div>
                    <table height="120">
                      <tr>
                        <td style="border:none;vertical-align:text-top;">
                          <table width="100%"  border=0 cellpadding=2 cellspacing=6 align="center">
                            <tr><td><span class="general"><?php echo $GLOBALS['I18N']->get('Username');?>:</span></td><td><input type=text name="login" value="" size=30></td></tr>
                            <tr><td><span class="general"><?php echo $GLOBALS['I18N']->get('password');?>:</span></td><td><input type=password name="password" value="" size=30></td></tr>
                            <tr><td>&nbsp;</td><td><input type=submit name="process" class="ui-state-default ui-corner-all" value="<?php echo $GLOBALS['I18N']->get('Login');?>"></td></tr>
                          </table>
                        </td>   
                      </tr>
                    </table>
                  </div>
                  </p>
                </div>

              </td></tr>

              <tr><td style="border:none;vertical-align:text-top;">
                <center>
                <p>
                <div class="toggler" style="width:400px; height:auto;">
                 <!--<a href="#" id="fbval" class="ui-state-default ui-corner-all" value="fbval">Forgot Password?</a>-->
                 <input type="button" id="fbval" class="ui-state-default ui-corner-all" value="Forgot Password?" style="height:30px;">
                 <div id="effect" class="ui-widget-content ui-corner-all">
               	  <h3 class="ui-widget-header ui-corner-all">Enter your email id</h3>
        	      	<div id="forgotpass">
          	        <form method="post" action="">
	                 	 <input type="hidden" name="page" value="<?php echo $page?>">
              			 <table width=80% cellpadding=2 align="center">
                			 <tr><td>
                  			 <p align="center">

                    			 <!--<h4><a href="#"><?php echo $GLOBALS['I18N']->get('forgot password');?>:</a></h4>-->
                     			 <!--<?php echo $GLOBALS['I18N']->get('enter your email');?>: <input type=text name="forgotpassword" value="" size=25>-->
                     			 <input type=text name="forgotpassword" value="" size=25><br><br>

                    			 <center><input type=submit name="process" value="<?php echo $GLOBALS['I18N']->get('send password');?>"><center>
                  			 </p>
                			</td></tr></table>
              			 </form>			
                		</div>
                   </div>
                 </div>
                 </p>
                </center>
             </form>
            </td></tr></table>
           </td>
          </tr>
        </table>  
       </center>
<!--<p>
<tr><td background="../images/ui-bg_gloss-wave_55_500x100.png">
<div style="bgcolor:red; height:40px;">
<hr size="2" width="100%">
<center><i>@ Infospan Technologies<i></center>
</td></tr>
</div></p>
</center></td><tr></table>-->
