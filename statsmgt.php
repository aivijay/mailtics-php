<script src="js/dw_loader.js" type="text/javascript"></script>

<?php
require_once dirname(__FILE__).'/accesscheck.php';
$spb ='<span>';
$spe = '</span>';
?>


<?
/* The actual page links - Babu */
/*print $spb.PageLink2("statsoverview",$GLOBALS['I18N']->get('Overview')).$spe;
//print $spb.PageLink2("grid",$GLOBALS['I18N']->get('Overview')).$spe;
print $spb.PageLink2("uclicks",$GLOBALS['I18N']->get('View Clicks by URL')).$spe;
print $spb.PageLink2("mclicks",$GLOBALS['I18N']->get('View Clicks by Message')).$spe;
print $spb.PageLink2("mviews",$GLOBALS['I18N']->get('View Opens by Message')).$spe;
print $spb.PageLink2("domainstats",$GLOBALS['I18N']->get('Domain Statistics')).$spe; */
/* Ends here */
?>

<div class="statsmgt">
<ul>
    <li><a href="?page=statsoverview" onclick="return dw_loadExternal(this.href)">Overview</a></li>
    <li><a href="?page=uclicks" onclick="return dw_loadExternal(this.href)">View Clicks by URL</a></li>
    <li><a href="?page=mclicks" onclick="return dw_loadExternal(this.href)">View Clicks by Message</a></li>
    <li><a href="?page=mviews" onclick="return dw_loadExternal(this.href)">View Opens by Message</a></li>
    <li><a href="?page=domainstats" onclick="return dw_loadExternal(this.href)">Domain Statistics</a></li>
</ul>
</div>	

<div id="display"></div>
<!-- onload attribute does not validate but is included here rather than assigned via JavaScript to maximize cross browser support  -->
<iframe id="buffer" name="buffer" src="?page=statsoverview" onload="dw_displayExternal()"></iframe>
