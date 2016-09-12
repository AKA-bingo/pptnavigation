<?php
require 'conn.php';

$ws_name = req_sec(isset($_POST['ws_name']) ? $_POST['ws_name'] : "");
$ws_url = req_sec(isset($_POST['ws_url']) ? $_POST['ws_url'] : "");
$ws_memo = req_sec(isset($_POST['ws_memo']) ? $_POST['ws_memo'] : "");
$cid = req_sec(isset($_POST['cid']) ? $_POST['cid'] : "");
$wid = req_sec(isset($_POST['wid']) ? $_POST['wid'] : "");
$ws_priority = req_sec(isset($_POST['ws_priority']) ? $_POST['ws_priority'] : "");

if($wid != "" && $ws_name != ""){
	$query = 'update website set ws_name="'.$ws_name.'", ws_url="'.$ws_url.'", ws_memo="'.$ws_memo.'", ws_priority="'.$ws_priority.'", cid="'.$cid.'" where wid='.$wid;
	$res = mysql_query($query) or die(mysql_error());
	$reg = mysql_affected_rows();
	if($reg > 0){
	    echo 'success';
	}else{
	    echo 'error';
	}
}
?>