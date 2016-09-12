<?php
require 'conn.php';

$hid = req_sec(isset($_GET['hid']) ? $_GET['hid'] : "");

if($hid != ""){
    $query = "delete from chtml where hid=".$hid;
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    if($reg > 0){
		echo '<script>location.replace(document.referrer);</script>';
	}
}
?>