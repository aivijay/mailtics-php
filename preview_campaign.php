
<script language="Javascript" src="js/jslib.js" type="text/javascript"></script>
<hr />

<?php
require_once dirname(__FILE__).'/accesscheck.php';

$id = sprintf('%d',$_GET["id"]);
if (!$id) {
  print $GLOBALS['I18N']->get('Please select a message to display') . "\n";
  exit;
}

$access = accessLevel('message');
#print "Access: $access";
switch ($access) {
  case 'owner':
    $subselect = ' where owner = ' . $_SESSION["logindetails"]["id"];
    $owner_select_and = ' and owner = ' . $_SESSION["logindetails"]["id"];
    break;
  case 'all':
    $subselect = '';
    $owner_select_and = '';
    break;
  case 'none':
  default:
    $subselect = ' where id = 0';
    $owner_select_and = ' and owner = 0';
    break;
}

require $coderoot . 'structure.php';

$result = Sql_query("SELECT * FROM {$tables['message']} where id = $id $owner_select_and");
if (!Sql_Affected_Rows()) {
  print $GLOBALS['I18N']->get('No such message');
  return;
}

while ($msg = Sql_fetch_array($result)) {
  print "<span class='title1'>Preview Campaign: " . $msg['campaign'] . "</span><br/><br/>";
  print $msg['message'];
}

?>
