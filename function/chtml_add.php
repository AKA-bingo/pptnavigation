<?php
require 'permit.php';
require 'conn.php';

$label = req_sec(isset($_POST['label']) ? $_POST['label'] : "");
$ch_code = req_sec(isset($_POST['ch_code']) ? $_POST['ch_code'] : "");
$ch_note = req_sec(isset($_POST['ch_note']) ? $_POST['ch_note'] : "");

if($label != ''){
	$query = 'select * from chtml where label="'.$label.'"';
	$res = mysql_query($query) or die(mysql_error());
	$rowsnum = mysql_num_rows($res);
	if($rowsnum > 0){
        	echo 'chtmlexit';
    	}
	else{
		$query = 'INSERT INTO chtml(label,ch_code,ch_note) VALUES("'.$label.'","'.$ch_code.'","'.$ch_note.'")';
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