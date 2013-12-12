<?php

  $urlQs = $_SERVER['QUERY_STRING'];
  $rand = rand(1, 999999999);
  $iFrameName = "if_" . md5(time() + microtime() + rand());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script src="js/ajax.js" type="text/javascript"></script>
  <style>body{ font-size: 11px; font-family: Arial; }</style>


<script type="text/javascript">
function autoIframe(frameId){
try{
frame = document.getElementById(frameId);
innerDoc = (frame.contentDocument) ? frame.contentDocument : frame.contentWindow.document;
objToResize = (frame.style) ? frame.style : frame;
alert('debug: --> is it going to workkkkkkkkkkkkk');
alert('debug: --> offheight = [' + innerDoc.body.offsetHeight + ']');
objToResize.height = innerDoc.body.scrollHeight + 10;

alert('debug: -->height =[' + objToResize.height + ']');
frame.height = objToResize.height;
alert('debug: --> ok done..');
}
catch(err){
window.status = err.message;
}
}
</script>

<script>

//url = "index.php?page=list";
function trigger() {
  url = "index.php?<?php echo $urlQs; ?>&h=1&ifid=<?php echo $iFrameName; ?>";
//  response = processApi(url);
  //alert('response = [' + response + ']');
//  document.getElementById("content").innerHTML = response;
  var siframe = document.getElementById("<?php echo $iFrameName; ?>");

  var docObject = (siframe.contentDocument) ? siframe.contentDocument : siframe.contentWindow.document; 
  //docObject.body.innerHTML = "";
  //docObject.body.innerHTML = response;
  docObject.location.href = url;
/// VIJAY  siframe.height = $(window).height();

////ORIG  docObject.scrolling = auto;
  /*
  docObject.height = docObject.body.scrollHeight + 10;
  objToResize = (siframe.style) ? siframe.style : siframe;
  objToResize.height = docObject.body.scrollHeight + 10;
  */
}

function trigger_new() {
  url = "index.php?<?php echo $urlQs; ?>&h=1&ifid=<?php echo $iFrameName; ?>";
//  response = processApi(url);
  //alert('response = [' + response + ']');
//  document.getElementById("content").innerHTML = response;
  var siframe = document.getElementById("<?php echo $iFrameName; ?>");

  var docObject = (siframe.contentDocument) ? siframe.contentDocument : siframe.contentWindow.document; 
  //docObject.body.innerHTML = "";
  //docObject.body.innerHTML = response;
  docObject.location.href = url;
/// VIJAY  siframe.height = $(window).height();

////ORIG  docObject.scrolling = auto;
  /*
  docObject.height = docObject.body.scrollHeight + 10;
  objToResize = (siframe.style) ? siframe.style : siframe;
  objToResize.height = docObject.body.scrollHeight + 10;
  */
}

function resize(iframe_id) {
//alert('debug: --> id = [' + iframe_id + ']');
  var iframe = document.getElementById(iframe_id);
  //alert("debug: --> iframe ---[" + iframe + "]");
  var docObject = (iframe.contentDocument) ? iframe.contentDocument : iframe.contentWindow.document; 
//  alert('debug: --> height=[' + docObject.body.scrollHeight + ']');
/*
    var time = 2000;
   // $("#"+ ifn).ready(function () { //The function below executes once the iframe has finished loading
   setTimeout(function() {
                $(self).dequeue();
                */
  iframe.height = docObject.body.scrollHeight + 10;
  //alert("debug: --> iframe.height = [" + iframe.height + "]");
}

function resize_new(iframe_id) {
//alert('debug: --> id = [' + iframe_id + ']');
  var iframe = document.getElementById(iframe_id);
  //alert("debug: --> iframe ---[" + iframe + "]");
  var docObject = (iframe.contentDocument) ? iframe.contentDocument : iframe.contentWindow.document; 
//  alert('debug: --> height=[' + docObject.body.scrollHeight + ']');
/*
    var time = 2000;
   // $("#"+ ifn).ready(function () { //The function below executes once the iframe has finished loading
   setTimeout(function() {
                $(self).dequeue();
                */
  iframe.height = docObject.body.scrollHeight + 10;
//  alert("debug: --> iframe.height = [" + iframe.height + "]");
}

</script>

</head>
<body onLoad="trigger();" style="height: 100%">
<div id="content" style="scrolling: auto;"></div>

<iframe name="<?php echo $iFrameName; ?>" id="<?php echo $iFrameName; ?>" width="100%" height="100%" src="home.php" frameborder="0" scrolling="auto" onLoad="resize('<?php echo $iFrameName; ?>');">

<!--
<div name="<?php echo $iFrameName; ?>" id="<?php echo $iFrameName; ?>" width="100%" src="home.php" frameborder="0" scrolling="auto" onLoad="resize('<?php echo $iFrameName; ?>');">

</div>
-->

<!-- onload="if (window.parent && window.parent.autoIframe) {window.parent.autoIframe('<?php //echo $iFrameName; ?>');}">-->



</iframe>


<script>
///  var ifn = "<?php echo $iFrameName; ?>";
////  frame = parent.window.document.getElementById(ifn);
///  frame.height = $(window).height();
trigger();

//if (window.parent && window.parent.autoIframe) {
/*
  alert('debug: --> resizing again ---');
  window.parent.autoIframe('<?php echo $iFrameName; ?>'); 
  alert('debug: --> resizing again done maybe---');
  */
//}
////alert('debug: --> oops');

</script>
<script type="text/javascript">
  var ifn = "<?php echo $iFrameName; ?>";
  frame = parent.window.document.getElementById(ifn);
//  frame.height = $(window).height();
$(document).ready(function() {
/*
    var time = 2000;
   // $("#"+ ifn).ready(function () { //The function below executes once the iframe has finished loading
   setTimeout(function() {
                $(self).dequeue();

//  parent.window.document.getElementById("<?php echo $iFrameName; ?>").height = document.body.offsetHeight ;
  try{
    //alert('On alert height setting works fine as the page might be completely loaded. FIX ITTTTTTTTTTTTTTTTTTTt');
    innerDoc = (frame.contentDocument) ? frame.contentDocument : frame.contentWindow.document;
    objToResize = (frame.style) ? frame.style : frame;
    var height = innerDoc.body.scrollHeight + 10;
    objToResize.height = innerDoc.body.scrollHeight + 10;
    frame.height = height;
  }
  catch(err){
    window.status = err.message;
  }
            }, time);
            */
////    });
});
</script>
</body>
</html>
