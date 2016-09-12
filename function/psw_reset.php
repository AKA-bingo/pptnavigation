<?php
require 'permit.php';
if($_SESSION['level'] != 100){
    header("location:index.php");
}
require 'conn.php';

$aid = req_sec(isset($_GET['aid']) ? $_GET['aid'] : "");

if($aid != ""){
    $query = "update admin set password=password('123456') where aid='".$aid."'";
    $res = mysql_query($query) or die(mysql_error());
    $reg = mysql_affected_rows();
    echo '<script>location="../admin/admin_list.php";</script>';
}
?>
