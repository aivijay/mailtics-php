<?php
  $urlQs = $_SERVER['QUERY_STRING'];
  $page = $_REQUEST['page']; 
  if ($page == "") {
    $url = "home.php";
    include $url;
    exit();
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script src="../js/ajax.js" type="text/javascript"></script>
  <style>body{ font-size: 11px; font-family: Arial; }</style>
</head>
<body>
  <b>jQuery Links:</b>
<ul id="links"></ul>

<div id="<?php echo $page; ?>"></div>

<script>
url = "index.php?<?php print $urlQs; ?>&h=1";
response = processApi(url);
document.getElementById("<?php echo $page; ?>").innerHTML = "";
document.getElementById("<?php echo $page; ?>").innerHTML = response;
</script>

</body>
</html>
