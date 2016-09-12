<?php
require 'conn.php';

$cid = req_sec(isset($_GET['cid']) ? $_GET['cid'] : "");
if($cid != ""){
    $query = "update category set cat_delete=1 where cid=".$cid;
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    if($reg > 0){
        $query2 = "update website set ws_delete=1 where cid=".$cid;
        $res2 = mysql_query($query2) or die(mysql_error());
        echo '<script>location.replace(document.referrer);</script>';
    }
}
?>
