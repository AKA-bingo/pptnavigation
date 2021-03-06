<?php require "../function/permit.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>标签管理 - LOVEPPT DASHBOARD</title>

  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">

</head>

<body class="sticky-header">
<section>
    <?php require "basemenu.php"; ?>
        <!--body wrapper start-->
        <div class="wrapper">
          <div class="row">
            <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    标签列表
                </header>
                <div class="panel-body">
                    <table class="table  table-hover general-table">
                        <thead>
                            <tr>
                                <th>标签名</th>
                                <th class="hidden-phone">注释</th>
                                <th class="col-md-1 col-md-offset-8">状态</th>
                                <th class="col-md-1 col-md-offset-8">修改</th>
                                <th class="col-md-1 col-md-offset-9">下架</th>
                                <th class="col-md-1 col-md-offset-10">删除</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require '../function/chtml_list.php'; ?>
                        </tbody>
                    </table>
                    <nav>
                              <ul class="pager"> 
                                <li>
                                  <a href="?page=<?php echo $pageleft;?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <?php
                                    for ($i=1; $i <= $pagecount ; $i++) {
                                      if($i == $page){
                                        echo '<li><a style="color:#ffffff;background:#65CEA7;" href="?page='.$i.'">'.$i.'</a></li>';
                                      }else{
                                        echo '<li><a href="?page='.$i.'">'.$i.'</a></li>';
                                      }
                                    }
                                ?>
                                <li>
                                  <a href="?page=<?php echo $pageright;?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
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

</body>
</html>
