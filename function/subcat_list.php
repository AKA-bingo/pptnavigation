<?php

$query = "select cid, cat_name from category where parent_cat!=".$root_cat." and cid!=".$root_cat." and cat_delete=0";
$res = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($res)){
    $cid = $row['cid'];
    $cat_name = $row['cat_name'];
    if($cid_value && $cid_value == $cid){
        echo '<option value ='.$cid.' selected='.$cat_name.'>'.$cat_name.'</option>';
    }else{
        echo '<option value ="'.$cid.'" >'.$cat_name.'</option>';
    }
}
?>