<?php
require_once dirname(__FILE__).'/accesscheck.php';

$access = accessLevel("create_campaign_main");
ob_start();
include "campaign_content.php";
