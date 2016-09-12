<?php 
require "../function/permit.php";
if($_SESSION['level'] != 100){
    header("location:index.php");
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

  <title>用户管理 - LOVEPPT DASHBOARD</title>

  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">
  
</head>

<body class="sticky-header">

<section>
    <?php require "basemenu.php";?>

        <!--body wrapper start-->
        <div class="wrapper" id="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        添加管理员:
                        </header>
                        <div class="panel-body">
                            <div role="form" class="form-horizontal adminex-form" >
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">管理员名</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="usr" class="form-control">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">密码</label>
                                        <div class="col-lg-10">
                                            <input type="password" placeholder="" id="psw" class="form-control">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">重复密码</label>
                                        <div class="col-lg-10">
                                            <input type="password" placeholder="" id="psw2" class="form-control">
                                        </div>
                                </div>
                            <div class="err" style="text-align:center;color:red;"></div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button id="regbtn" class="btn btn-primary" type="button">添加</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                </div>
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
<script src="../js/admin/register.js"></script>

</body>
</html>

