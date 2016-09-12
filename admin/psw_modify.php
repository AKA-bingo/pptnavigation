<?php require "../function/permit.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Adminex</title>

  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">

</head>

<body class="sticky-header">

<section>
    <?php require "basemenu.php"; ?>

        <!--body wrapper start-->
        <div class="wrapper" id="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            修改密码:
                        </header>
                        <div class="panel-body">
                            <div role="form" class="form-horizontal adminex-form" >
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">旧密码</label>
                                    <div class="col-lg-10">
                                        <input type="password" placeholder="" id="old_psw" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">新密码</label>
                                    <div class="col-lg-10">
                                        <input type="password" placeholder="" id="psw" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">重复新密码</label>
                                    <div class="col-lg-10">
                                        <input type="password" placeholder="" id="psw2" class="form-control">
                                    </div>
                                </div>
                                <input id="aid" style="display:none" value="<?php echo $_SESSION['aid']; ?>">
                                <div class="err" style="text-align:center;color:red;"></div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button id="psw_modify_btn" class="btn btn-primary" type="button">修改</button>
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
    2014 &copy; AdminEx by ThemeBucket
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
<script src="../js/admin/psw_modify.js"></script>
</body>
</html>

