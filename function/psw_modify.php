<?php
require 'permit.php';
require 'conn.php';

$aid = req_sec(isset($_POST['aid']) ? $_POST['aid'] : "");
$old_psw = req_sec(isset($_POST['old_psw']) ? $_POST['old_psw'] : "");
$psw = req_sec(isset($_POST['psw']) ? $_POST['psw'] : "");

if($aid != "" && $old_psw != "" && $psw != ""){
    $query = "select password from admin where aid='".$aid."'";
    $res = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($res);
    $querypsw = "select password('".$old_psw."')";
    $respsw = mysql_query($querypsw);
    $rowpsw = mysql_fetch_row($respsw);
    if ($row["password"] == $rowpsw[0]) {
    	$query2 = "update admin set password=password('".$psw."') where aid='".$aid."'";
    	$res2 = mysql_query($query2);
    	$reg = mysql_affected_rows();
    	if($reg > 0){
    		echo 'success';
    	}
    }else{
    	echo 'psw_error';
    }
} else{
    echo 'fail';
}
?>
