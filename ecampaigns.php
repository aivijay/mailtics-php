<!--
 Setting jquery tab handlers - vijay
-->

Email Campaigns

<script type="text/javascript">
  jQuery(function(){
    // Tabs
    jQuery('#tabs').tabs();
  });
</script>

<script type="text/javascript">


  function runTest() {
    UI.defaultWM.options.blurredWindowsDontReceiveEvents = true;

    function openWindow(url) {
      new UI.URLWindow({
        width: 600, 
        height: 400,
        shadow: true,
        theme: "mac_os_x",
        url: url || 'index.php?page=users' }).show();  
     } 
   
     openWindow();  
     openWindow();  
     openWindow("http://www.google.com");   
   }  
   //Event.observe(window, "load", runTest);

  function openMailingList(url) {
    UI.defaultWM.options.blurredWindowsDontReceiveEvents = true;
  
    function openWindow(url) {
      new UI.URLWindow({
        width: 600, 
        height: 400,
        shadow: true,
        theme: "mac_os_x",
        url: url || 'index.php?page=home' }).show();  
     } 
      openWindow(url);
   }  
    //Event.observe(window, "load", runTest);
</script>



    <div id="tabs">
      <ul>
        <li><a href="manage_campaigns.php">Manage Campaigns</a></li>
        <li><a href="create_campaign.php">Create Campaign</a></li>
      </ul>
</div>


