<?php
require 'permit.php';
require 'conn.php';

$ws_name = req_sec(isset($_POST['ws_name']) ? $_POST['ws_name'] : "");
$ws_url = req_sec(isset($_POST['ws_url']) ? $_POST['ws_url'] : "");
$ws_memo = req_sec(isset($_POST['ws_memo']) ? $_POST['ws_memo'] : "");
$cid = req_sec(isset($_POST['cid']) ? $_POST['cid'] : "");
$ws_priority = req_sec(isset($_POST['ws_priority']) ? $_POST['ws_priority'] : "");

if($ws_name != ''&&$ws_url != ""){
	$query = "select * from website where (ws_name='".$ws_name."' or ws_url='".$ws_url."') and ws_delete=0";
	$res = mysql_query($query) or die(mysql_error());
	$rowsnum = mysql_num_rows($res);
	if($rowsnum > 0){
        	echo 'website_exit';
    	}
	else{
		$query = "INSERT INTO website(ws_name,ws_url,ws_memo,ws_priority,cid) VALUES('".$ws_name."','".$ws_url."','".$ws_memo."','".$ws_priority."','".$cid."')";
		$res2 = mysql_query($query) or die(mysql_error());
		$reg = mysql_affected_rows();
		if($reg > 0){
			echo 'success';
		}
		else{
			echo 'fail';
		}	
	}
}
?>
