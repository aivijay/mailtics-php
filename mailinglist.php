Mailing List page
    <div id="tabs-mailinglist">
      <ul>
        <li><a href="index.php?page=list">List</a></li>
        <li><a href="index.php?page=usermgt">User Management</a></li>
        <li><a href="#tabs-3">Mailing List and Users</a></li>
        <li><a href="#tabs-4">Message</a></li>
        <?php if (ENABLE_RSS) {  ?>
        <li><a href="#tabs-5">RSS</a></li>
        <?php } ?>
        <?php if (sizeof($GLOBALS['plugins'])) { ?>
        <li><a href="#tabs-6">Plugins</a></li>
        <?php } ?>
        <li><a href="#tabs-7">Administration</a></li>
      </ul>
    </div>
