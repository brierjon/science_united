<?php
require_once("../inc/util.inc");
require_once("../inc/su.inc");

$user = get_logged_in_user();
page_head("Projects");
show_user_projects($user);
page_tail();

?>
