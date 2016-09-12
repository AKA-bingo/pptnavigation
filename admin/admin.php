<?php require "../function/permit.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">
    <title>首页 - LOVEPPT DASHBOARD</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">
</head>

<body class="sticky-header">
<section>
    <?php require "basemenu.php";?>
        <!--body wrapper start-->
        <div class="row">
            <div class="col-sm-offset-1">
            <div class="jumbotron">
                <h1>Hello,<?php echo $_SESSION['username'];?>.</h1></div><br>
                <p><span>上一次登陆IP:<?php echo $_SESSION['lastip'];  ?></span></p>
                <p><span>上一次登陆时间:<?php echo $_SESSION['lasttime']; ?></span></p>
            </div> 
        </div>
    <!--body wrapper end-->
    </div>
    <!-- main content end-->

</section>

<!--footer section start-->
<footer>
  Theme By AdminEx. Powered By Bingo.
</footer>
<!--footer section end-->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../js/jquery/jquery-1.11.3.min.js"></script>
<script src="../js/jquery/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/admin/modernizr.min.js"></script>
<script src="../js/jquery/jquery.nicescroll.js"></script>
<script src="../js/admin/scripts.js"></script>

</body>
</html>

