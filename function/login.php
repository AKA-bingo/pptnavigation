<?php
require 'conn.php';
session_start();

$usr = req_sec(isset($_POST['usr']) ? $_POST['usr'] : "");
$psw = req_sec(isset($_POST['psw']) ? $_POST['psw'] : "");

if($usr != "" && $psw != "" ){
    $query = "select * from admin where username='".$usr."'";
    $res = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($res);
    if($row){
    	$querypsw = "select password('".$psw."')";
        $respsw = mysql_query($querypsw) or die(mysql_error());
    	$rowpsw = mysql_fetch_row($respsw);
    	if($rowpsw[0] == $row['password']){
                $_SESSION['lastip'] = $row['lastip'];
                $_SESSION['lasttime'] = $row['lasttime'];
                $_SESSION['level'] = $row['level'];
                $_SESSION['username'] = $usr;
                $_SESSION['aid'] = $row['aid'];
                $newip = $_SERVER['REMOTE_ADDR'];
                $newdate = date('Y-m-d H:i:s');
                $query2 = "update admin set lastip='".$newip."',lasttime='".$newdate."' where aid='".$row['aid']."'";
                $res2 = mysql_query($query2) or die(mysql_error());
                $reg2 = mysql_affected_rows();
                if($reg2 > 0){
                    echo 'success';
                }
    	}else{
    	    echo 'pswerror';	        
    	}
    }else{
       echo 'usrerror';
    }
}else{
    echo 'fail';
}
?>
