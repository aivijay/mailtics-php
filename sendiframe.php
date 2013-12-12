<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script src="js/ajax.js" type="text/javascript"></script>
  <style>body{ font-size: 11px; font-family: Arial; }</style>
<script>
//url = "index.php?page=list";
function trigger() {
  url = "index.php?page=send";
  response = processApi(url);
  //document.getElementById("content").innerHTML = response;
  var siframe = document.getElementById("tiframe");

    var docObject = siframe.contentDocument; 
  docObject.body.innerHTML = response;
}


</script>

</head>
<body onLoad="alert('dfd');trigger();">
  <b>MailTics:</b>
<ul id="links"></ul>
<div id="content"></div>
<iframe id="tiframe" width="100%" height="400" frameborder="0">

</iframe>

<script>
trigger();
</script>
</body>
</html>
