<?php
require "conn.php";

$usr = req_sec(isset($_POST['usr']) ? $_POST['usr'] : "");
$psw = req_sec(isset($_POST['psw']) ? $_POST['psw'] : "");

if($usr != "" && $psw != ""){
    $query = "select * from admin where username='".$usr."'";
    $res = mysql_query($query) or die(mysql_error());
    $rowsnum = mysql_num_rows($res);
    if($rowsnum > 0){
        echo 'userexit';
    } 
    else {
        $query = "INSERT INTO admin(username,password) VALUES('".$usr."',password('".$psw."'))";
        $res2 = mysql_query($query) or die(mysql_error());
        $reg = mysql_affected_rows();
        if($reg > 0){
            echo 'success';
        }
	else{
            echo 'fail';
        }
    }
}
else {
    echo 'fail';
}
?>
