<?php
$query = "select cid, cat_name from category where (parent_cat=".$root_cat." or parent_cat=-1) and cat_delete=0";
$res = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($res)){
    $cid = $row['cid'];
    $cat_name = $row['cat_name'];
    if($parent_cat && $parent_cat == $cid){
		echo '<option value ='.$cid.' selected='.$cat_name.'>'.$cat_name.'</option>';
	}else{
		echo '<option value ="'.$cid.'" >'.$cat_name.'</option>';
	}
}
?>