<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Login</title>

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">

</head>

<body class="login-body">

<div class="container">

    <div class="form-signin">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Sign In</h1>
            <img src="../images/login-logo.png" alt=""/>
        </div>
        <div class="login-wrap" style="TEXT-ALIGN: center;">
            <input id="usr" type="text" class="form-control" placeholder="Username" autofocus value=<?php echo $_COOKIE["usr"]; ?>>
            <input id="psw" type="password" class="form-control" placeholder="Password" value=<?php echo $_COOKIE["psw"]; ?>> 
            <button id="logbtn" class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>
            <label class="checkbox">
                <input id="rmbcheck" type="checkbox" checked="checked"> Remember me
            </label>
            <div class="err" style="color:red;"></div>
        </div>
    </div>
</div>


<script src="../js/jquery/jquery-1.11.3.min.js"></script>
<script src="../js/jquery/jquery.cookie.js"></script>
<script src="../js/admin/login.js"></script>
<script src="../js/admin/modernizr.min.js"></script>

</body>
</html>
