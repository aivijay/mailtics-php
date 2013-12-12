<?php

//
// getCampaignCount - 
// return count
//
function getCampaignCount() { 
  $sql = sprintf('select count(*) as count from %s', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $count = $row["count"]; // 
  return $count;
}

//
// getLatestCampaigns - takes number of campaigns to fetch else 5
// returns a result set of latest campaign records
//
function getLatestCampaigns () {
  $sql = sprintf('select * from %s order by id desc limit ' . MAX_CAMPAIGNS_COUNT, $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  return $result;
}

function getMailingListCount() { 
  $sql = sprintf('select count(*) as count from %s', $GLOBALS["tables"]["list"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $count = $row["count"]; // 
  return $count;
}

function getMailingListCountActive() { 
  $sql = sprintf('select count(*) as count from %s where active = 1', $GLOBALS["tables"]["list"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $count = $row["count"]; // 
  return $count;
}

//
// getLatestMailingList - takes number of mailing list to fetch else 5
// returns a result set of latest mailing list records
//
function getLatestMailingList () {
  $sql = sprintf('select * from %s order by id desc limit ' . MAX_MAILINGS_COUNT, $GLOBALS["tables"]["list"]);
  $result = Sql_Query($sql);
  return $result;
}

function getScheduledCount() { 
  // filters only the list in the process queue, not scheduled later after now.
  //$sql = sprintf('select count(*) as count from mt_message where status != "draft" and status != "sent" and status != "prepared" and status != "suspended" and embargo < now() order by entered', $GLOBALS["tables"]["message"]);
  // filters jobs in processqueue along scheduled as well.
  $sql = sprintf('select count(*) as count from mt_message where status != "draft" and status != "sent" and status != "prepared" and status != "suspended"  order by entered', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $count = $row["count"]; // 
  return $count;
}

//
// getScheduledList - takes scheduled list in ascending order so we get the job close to scheduling
// returns a result set of latest schedule records
//
function getScheduledList () {
  // filters only the list in the process queue, not scheduled later after now.
  //$sql = sprintf('select id,userselection,rsstemplate,subject,campaign,embargo from mt_message where status != "draft" and status != "sent" and status != "prepared" and status != "suspended" and embargo < now() order by entered', $GLOBALS["tables"]["message"]);
  // filters jobs in processqueue along scheduled as well.
  $sql = sprintf('select id,userselection,rsstemplate,subject,campaign,embargo from mt_message where status != "draft" and status != "sent" and status != "prepared" and status != "suspended"  order by entered', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  return $result;
}

function getTotalSent() {
  $sql = sprintf('select sum(processed) as sent from %s', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $sent = $row["sent"]; // 
  return $sent;
}

function getSentDaily() {
  $sql = sprintf('select sum(processed) as sent from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 1 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $sent = $row["sent"]; // 
  return $sent;
}

function getSentWeekly() {
  $sql = sprintf('select sum(processed) as sent from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 7 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $sent = $row["sent"]; // 
  return $sent;
}

function getSentMonthly() {
  $sql = sprintf('select sum(processed) as sent from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 30 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $sent = $row["sent"]; // 
  return $sent;
}

function getTotalViewed() {
  $sql = sprintf('select sum(viewed) as viewed from %s', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $viewed = $row["viewed"]; // 
  return $viewed;
}

function getViewedDaily() {
  $sql = sprintf('select sum(viewed) as viewed from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 1 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $viewed = $row["viewed"]; // 
  return $viewed;
}

function getViewedWeekly() {
  $sql = sprintf('select sum(viewed) as viewed from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 7 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $viewed = $row["viewed"]; // 
  return $viewed;
}

function getViewedMonthly() {
  $sql = sprintf('select sum(viewed) as viewed from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 30 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $viewed = $row["viewed"]; // 
  return $viewed;
}

function getTotalBounced() {
  $sql = sprintf('select sum(bouncecount) as bounce from %s', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $bounce = $row["bounce"]; // 
  return $bounce;
}

function getBouncedDaily() {
  $sql = sprintf('select sum(bouncecount) as bounce from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 1 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $bounce = $row["bounce"]; // 
  return $bounce;
}

function getBouncedWeekly() {
  $sql = sprintf('select sum(bouncecount) as bounce from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 7 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $bounce = $row["bounce"]; // 
  return $bounce;
}

function getBouncedMonthly() {
  $sql = sprintf('select sum(bouncecount) as bounce from %s where sent <= now() and sent >= date_sub(now(), INTERVAL 30 DAY)', $GLOBALS["tables"]["message"]);
  $result = Sql_Query($sql);
  $row = Sql_fetch_array($result);
  $bounce = $row["bounce"]; // 
  return $bounce;
}

?>
