<?php
class sidebar extends mailticsPlugin {
  var $name = "Mozilla Sidebar";
  var $coderoot = "plugins/sidebar/";

  function helloworld() {
  }

  function adminmenu() {
    return array(
      "main" => "Mozilla Sidebar"
    );
  }

}
?>
