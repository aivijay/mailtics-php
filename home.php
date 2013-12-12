<?php
  include_once("dashboard-data.php");
?>
<script src="js/tabs/js/jquery-ui-1.7.1.custom.min.js" type="text/javascript"></script>
<script>
  $(function(){
    $('#tabs-new').tabs({
      show: function(event, ui) {
        $('a', ui.panel).click(function(event) {
          $(ui.panel).load(this.href);
          return false;
        });
      }
    });
  });
 
</script>

    <div id="LeftPane" class="ui-layout-west ui-widget ui-widget-content">
		  <table id="west-grid"></table>
	  </div> <!-- #LeftPane -->
	  <div id="RightPane" class="ui-layout-center ui-helper-reset ui-widget-content" ><!-- Tabs pane -->
    <div id="switcher"></div>
		<div id="tabs-new" class="jqgtabs">
			<ul>
				<li><a href="#tabs-1">DashBoard</a></li>
			</ul>
			<div id="tabs-1" style="font-size:12px;"> 
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>
               <!-- <link type="text/css" href="js/ui/themes/base/jquery.ui.all.css" rel="stylesheet" />-->
               <!-- <script type="text/javascript" src="../../jquery-1.4.2.js"></script>-->
                <script type="text/javascript" src="js/ui/jquery.ui.core.js"></script>
                <script type="text/javascript" src="js/ui/jquery.ui.widget.js"></script>

                <script type="text/javascript" src="js/ui/jquery.ui.mouse.js"></script>
                <script type="text/javascript" src="js/ui/jquery.ui.sortable.js"></script>
                <link type="text/css" href="styles/dashboard.css" rel="stylesheet" />
                <style type="text/css">
                  .column { width: 270px; float: left; padding-bottom: 100px; }
                  .portlet { margin: 0 1em 1em 0; }
                  .portlet-header { margin: 0.3em; padding-bottom: 4px; padding-left: 0.2em; }
                  .portlet-header .ui-icon { float: right; }
                  .portlet-content { padding: 0.4em; }
                  .ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
                  .ui-sortable-placeholder * { visibility: hidden; }
                </style>
                <script type "text/javascript">
                  $(function() {
                  $(".column").sortable({
                    connectWith: '.column'
                  });

                  $(".portlet").addClass("ui-widget ui-widget-content ui-helper-clearfix ui-corner-all")
                    .find(".portlet-header")
                    .addClass("ui-widget-header ui-corner-all")
                    .prepend('<span class="ui-icon ui-icon-minusthick"></span>')
                    .end()
                    .find(".portlet-content");

                  $(".portlet-header .ui-icon").click(function() {
                    $(this).toggleClass("ui-icon-minusthick").toggleClass("ui-icon-plusthick");
                    $(this).parents(".portlet:first").find(".portlet-content").toggle();
                  });

                  $(".column").disableSelection();
                });
              </script>
              <div class="demo">

                <div class="column">

                  <div class="portlet">
                    <div class="portlet-header">Campaigns</div>
                      <div class="portlet-content">

                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              Campaigns: 
                            </td>
                            <td align="right">
                              <?php 
                                $campaignCount = getCampaignCount(); 
                                echo '<span class="db-text">' . $campaignCount . '</span>'; 
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <td height="5" colspan="2">
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <table border="0" width="100%" cellspacing="0" cellspacing="0">
                                <tr>
                                  <td>
                                    <b>Latest <?php echo $campaignCount > MAX_CAMPAIGNS_COUNT ? MAX_CAMPAIGNS_COUNT : $campaignCount; ?> campaigns</b>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <hr/>
                                  </td>
                                </tr>
                                <?php 
                                  $result = getLatestCampaigns();
  //print_r($GLOBALS['tables']);
                                  while ($row = Sql_fetch_array($result)) {
                                    $campaignName = $row['campaign'];

                                ?>
                                <tr>
                                  <td>
                                    <?php print $campaignName; ?>
                                  </td>
                                </tr>
                                <?php 
                                  } // end while
                                ?>
                              </table>
                            </td>
                          </tr>
                        </table>

                      </div>
                    </div>
  
                    <div class="portlet">
                      <div class="portlet-header">Mailing Lists</div>

                      <div class="portlet-content">
                      
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <b>Total Mailing Lists: </a>
                            </td>
                            <td align="right">
                              <?php
                                $mailingListCount = getMailingListCount();
                                echo '<span class="db-text">' . $mailingListCount . '</span>'; 
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <b>Active Mailing Lists: </a>
                            </td>
                            <td align="right">
                              <?php echo '<span class="db-text">' . getMailingListCountActive() . '</span>'; ?>
                            </td>
                          </tr>

                          <tr>
                            <td height="5">
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <table border="0" width="100%" cellspacing="0" cellspacing="0">
                                <tr>
                                  <td>
                                    <b>Latest <?php echo $mailingListCount > MAX_MAILINGS_COUNT ? MAX_MAILINGS_COUNT : $mailingListCount; ?> Mailing Lists</b>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <hr/>
                                  </td>
                                </tr>
                                <?php 
                                  $result = getLatestMailingList();
  //print_r($GLOBALS['tables']);
                                  while ($row = Sql_fetch_array($result)) {
                                    $campaignName = $row['name'];

                                ?>
                                <tr>
                                  <td>
                                    <?php print $campaignName; ?>
                                  </td>
                                </tr>
                                <?php 
                                  } // end while
                                ?>
                              </table>
                            </td>
                          </tr>
                        </table>
                      
                      </div>
                    </div>

                  </div>

                  <div class="column">

                    <div class="portlet">
                      <div class="portlet-header">Scheduled Campaigns</div>
                      <div class="portlet-content">
                      
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <b>Scheduled campaigns: </a>
                            </td>
                            <td align="right">
                              <?php
                                $scheduledCount = getScheduledCount();
                                echo '<span class="db-text">' . $scheduledCount . '</span>'; 
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <td height="5">
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <table border="0" width="100%" cellspacing="0" cellspacing="0">
                                <tr>
                                  <td width="100%" colspan="2">
                                    <b>Currently in Schedule queue</b>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" colspan="2">
                                    <hr/>
                                  </td>
                                </tr>
                                <tr bgcolor="#7dcbfd">
                                  <td>
                                    <b>Campaign name</b>
                                  </td>
                                  <td align="left">
                                    <b>Time</b>
                                  </td>
                                </tr>
                                <?php 
                                  $result = getScheduledList();
                                  while ($row = Sql_fetch_array($result)) {
                                    $campaignName = $row['campaign'];
                                    $scheduled = $row['embargo'];

                                ?>
                                <tr>
                                  <td width="100%" colspan="2">
                                    <table border="0" width="100%" cellpadding="3" cellspacing="1">
                                      <tr>
                                        <td width="70%" valign="top">
                                          <?php print $campaignName; ?>
                                        </td>
                                        <td width="30%" valign="top">
                                          <?php print $scheduled; ?>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <?php 
                                  } // end while
                                ?>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>

                  </div>

                  <div class="column">

                    <div class="portlet">
                      <div class="portlet-header">Stats</div>
                      <div class="portlet-content">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                          <?php
                                $total_sent = getTotalSent();
                                $total_sent_day = getSentDaily();
                                $total_sent_week = getSentWeekly();
                                $total_sent_month = getSentMonthly();

                                $total_viewed = getTotalViewed();
                                $total_viewed_day = getViewedDaily();
                                $total_viewed_week = getViewedWeekly();
                                $total_viewed_month = getViewedMonthly();
                          ?>
                          <tr>
                            <td>
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Total
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Day
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Week
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Month
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Sent
                            </td>
                            <td align="right">
                              <?php echo $total_sent; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_sent_day; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_sent_week; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_sent_month; ?>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Viewed
                            </td>
                            <td align="right">
                              <?php echo $total_viewed; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_viewed_day; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_viewed_week; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_viewed_month; ?>
                            </td>
                          </tr>

                        </table>
                      </div>
                    </div>

  
                    <div class="portlet">
                      <div class="portlet-header">Bounces/Unsubscribed</div>
                      <div class="portlet-content">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">

                          <?php
                                $total_bounced = getTotalBounced();
                                $total_bounced_day = getBouncedDaily();
                                $total_bounced_week = getBouncedWeekly();
                                $total_bounced_month = getBouncedMonthly();
                                /*
                                $total_viewed = getTotalViewed();
                                $total_viewed_day = getViewedDaily();
                                $total_viewed_week = getViewedWeekly();
                                $total_viewed_month = getViewedMonthly();
                                */
                          ?>
                          <tr style="font-weight: bold;">
                            <td>
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Total
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Day
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Week
                            </td>
                            <td align="right" style="font-weight: bold;">
                              Month
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Bounced
                            </td>
                            <td align="right">
                              <?php echo $total_bounced; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_bounced_day; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_bounced_week; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_bounced_month; ?>
                            </td>
                          </tr>
                          <!--
                          <tr>
                            <td>
                              Unsubscribed
                            </td>
                            <td align="right">
                              <?php echo $total_unsubscribed; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_unsubscribed_day; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_unsubscribed_week; ?>
                            </td>
                            <td align="right">
                              <?php echo $total_unsubscribed_month; ?>
                            </td>
                          </tr>
                          -->

                        </table>
                      </div>
                    </div>

                  </div>

                </div><!-- End dashboard -->
            </td>
          </tr>
        </table>  

			</div>
		</div>
	  </div> <!-- #RightPane -->
