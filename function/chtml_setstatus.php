<?php
require 'conn.php';

$type = req_sec(isset($_GET['type']) ? $_GET['type'] : "");
$hid = req_sec(isset($_GET['hid']) ? $_GET['hid'] : "");

if($hid != "" && $type == "down"){
    $query = 'update chtml set ch_delete=1 where hid="'.$hid.'"';
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    if($reg > 0){
    	echo '<script>location.replace(document.referrer);</script>';
    }else{
    	echo 'error';
    }
} else if($hid != "" && $type == "up"){
    $query = 'update chtml set ch_delete=0 where hid="'.$hid.'"';
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    if($reg > 0){
    	echo '<script>location.replace(document.referrer);</script>';
    }else{
    	echo 'error';
    }}
?>