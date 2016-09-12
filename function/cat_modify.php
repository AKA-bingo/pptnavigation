<?php
require 'conn.php';

$cat_name = req_sec(isset($_POST['cat_name']) ? $_POST['cat_name'] : "");
$cat_memo = req_sec(isset($_POST['cat_memo']) ? $_POST['cat_memo'] : "");
$cat_icon = req_sec(isset($_POST['cat_icon']) ? $_POST['cat_icon'] : "");
$cat_priority = req_sec(isset($_POST['cat_priority']) ? $_POST['cat_priority'] : "");
$parent_cat = req_sec(isset($_POST['parent_cat']) ? $_POST['parent_cat'] : "");
$cid = req_sec(isset($_POST['cid']) ? $_POST['cid'] : "");

if($cid != "" && $cat_name != ""){
    $query = 'update category set cat_name="'.$cat_name.'", cat_memo="'.$cat_memo.'", cat_icon="'.$cat_icon.'", cat_priority="'.$cat_priority.'", parent_cat="'.$parent_cat.'" where cid='.$cid;
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    if($reg > 0){
    	echo 'success';
    }else{
    	echo 'error';
    }
}
?>