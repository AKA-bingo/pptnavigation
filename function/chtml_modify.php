<?php
require 'conn.php';

$hid = req_sec(isset($_POST['hid']) ? $_POST['hid'] : "");
$ch_code = req_sec(isset($_POST['ch_code']) ? $_POST['ch_code'] : "");

if($hid != ""){
    $query = 'update chtml set ch_code="'.$ch_code.'" where hid="'.$hid.'"';
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    if($reg > 0){
    	echo 'success';
    }else{
    	echo 'error';
    }
}
?>