<?php require "../function/permit.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>网站管理 - LOVEPPT DASHBOARD</title>

  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">

</head>

<body class="sticky-header">

<section>
    <?php require "basemenu.php"; ?>
        <!--body wrapper start-->
        <div class="wrapper">
          <?php require '../function/conn.php'; require '../function/website_detail.php'; ?>
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
<script src="../js/admin/web_modify.js"></script>

</body>
</html>
