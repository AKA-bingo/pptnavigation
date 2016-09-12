<?php
require 'permit.php';
require 'conn.php';

$cat_name = req_sec(isset($_POST['cat_name']) ? $_POST['cat_name'] : "");
$cat_memo = req_sec(isset($_POST['cat_memo']) ? $_POST['cat_memo'] : "");
$cat_icon = req_sec(isset($_POST['cat_icon']) ? $_POST['cat_icon'] : "");
$cat_priority = req_sec(isset($_POST['cat_priority']) ? $_POST['cat_priority'] : "");
$parent_cat = req_sec(isset($_POST['parent_cat']) ? $_POST['parent_cat'] : "");

if($cat_name != ''){
	$query = "select * from category where cat_name='".$cat_name."' and cat_delete=0";
	$res = mysql_query($query) or die(mysql_error());
	$rowsnum = mysql_num_rows($res);
	if($rowsnum > 0){
        	echo 'catexit';
    	}
	else{
		$query = "INSERT INTO category(cat_name,cat_memo,parent_cat,cat_icon,cat_priority) VALUES('".$cat_name."','".$cat_memo."',".$parent_cat.",'".$cat_icon."','".$cat_priority."')";
		$res = mysql_query($query) or die(mysql_error());
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
