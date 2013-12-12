<center>
<table cellspacing=0 cellpadding=0 width=<?php echo $GLOBALS['screen_width']; ?> border=0>
<!--<tr>
<td bgcolor="#000000" rowspan=3><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>
<td bgcolor="#000000"><img height=1 alt="" src="images/transparent.png" width=<?php echo $GLOBALS['screen_width']; ?> border=0></td>
<td bgcolor="#000000" rowspan=3><img height=1 alt="" src="images/transparent.png" width=1 border=0></td>
</tr>-->
<tr>
<td>
</center>

  <TR vAlign=top>
    <!--<TD colSpan=2 rowspan="2" height="63" background="images/topstrip.png"><a href="#" target="_blank"><img src="images/mailtics-logo2.jpeg" border=0 width=128 height=80 alt=""></a></TD>-->
    <TD colSpan=2 rowspan="2" height="100" background="../images/ui-bg_gloss-wave_55_500x100.png"><a href="#" target="_blank"><font color="#ffffff"><h1>MailTics</h1><h6><i>perfect email tracker</i></font></h6><img src="images/mailtics-logo.jpeg" border=0 width=128 height=80 alt=""></a></TD>
   <!--<TD colSpan=2 rowspan="2" height="63" background="../images/ui-bg_gloss-wave_55_500x100.png"> <a href="#" target="_blank"><img src="images/mailtics-logo2.jpeg" border=0 width=128 height=80 alt=""></a></TD>-->

    <!--<TD align=left
      background="" bgcolor="">
      <?php
        if (LANGUAGE_SWITCH) {
          $ls = '<div align="right" id="languageswitch"><br/><form name="languageswitch" method="post" style="margin: 0; padding: 0">';
          $ls .= '<select name="setlanguage" onChange="document.languageswitch.submit()" style="width: 100px; font-size: 10px; color: #666666">';
          $lancount = 0;
          foreach ($GLOBALS['LANGUAGES'] as $iso => $rec) {
            if (is_dir(dirname(__FILE__).'/lan/'.$iso)) {
              $ls .= sprintf('<option value="%s" %s>%s</option>',$iso,$_SESSION['adminlanguage']['iso'] == $iso ? 'selected':'',$rec[0]);
              $lancount++;
            }
          }
          $ls .= '</select></form></div>';
          if ($lancount > 1) {
            print $ls;
          }
        }
      ?>
      </TD>--></TR>
  <TR vAlign=bottom>
    <TD vAlign=bottom width=140 height=80
    background="../images/ui-bg_gloss-wave_55_500x100.png" bgcolor="">
      <?php
        if ($GLOBALS["require_login"] && $page != "login") {
          if ($page == 'logout') {
            $greeting = $GLOBALS['I18N']->get('goodbye');
          } else {
            $hr = date("G");
            if ($hr > 0 && $hr < 12) {
              $greeting = $GLOBALS['I18N']->get('goodmorning');
            } elseif ($hr <= 18) {
              $greeting = $GLOBALS['I18N']->get('goodafternoon');
            } else {
              $greeting = $GLOBALS['I18N']->get('goodevening');
            }
          }
          print '<div style="height:30px;"><font style="font-size : 12px; font-family : Arial, Helvetica, sans-serif;  font-weight : bold-italic; color:#ffffff"> '.$greeting." : ".adminName($_SESSION["logindetails"]["id"]). "</font></div>";
	  
          if ($page != "logout") {
            print '<div align="right" style="height:20px; padding: 0px 45px 0px 0px; border:1px solid red;">'.PageLink2("logout",$GLOBALS['I18N']->get('logout'));   	    
          }
          print '</div>';
        }
      ?>
      </TD></TR>

