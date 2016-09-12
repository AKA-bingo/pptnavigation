<?php
require 'conn.php';

$wid = req_sec(isset($_GET['wid']) ? $_GET['wid'] : "");

if($wid != ""){
    $query = "update website set ws_delete=1 where wid=".$wid;
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    if($reg > 0){
		echo '<script>location.replace(document.referrer);</script>';
	}
}
?>
