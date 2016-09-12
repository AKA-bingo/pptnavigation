<?php require "../function/permit.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>分类管理 - LOVEPPT DASHBOARD</title>

  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">

</head>

<body class="sticky-header">

<section>
    <?php require "basemenu.php";?>
        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row col-sm-12" style="padding-bottom: 15px;">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              筛选
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="category_list.php">全部</a></li>
            <?php require '../function/cat_search.php';?>
            </ul>
          </div>
        </div>
        <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            分类列表
                        </header>
                        <div class="panel-body">
                            <table class="table  table-hover general-table">
                                <thead>
                                <tr>
                                    <th>分类名</th>
                                    <th>父分类</th>
                                    <th class="hidden-phone">分类描述</th>
                                    <!-- <th>分类图片</th> -->
                                    <th class="col-md-1 col-md-offset-8">状态</th>
                                    <th class="col-md-1 col-md-offset-9">修改</th>
                                    <th class="col-md-1 col-md-offset-10">优先级</th>
                                    <th class="col-md-1 col-md-offset-11">删除</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php require '../function/cat_detail.php';?>
                                </tbody>
                            </table>
                            <nav>
                              <ul class="pager"> 
                                <li>
                                  <a href="?parent_cat=<?php echo $_GET['parent_cat']; ?>&page=<?php echo $pageleft;?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <?php
                                    for ($i=1; $i <= $pagecount ; $i++) {
                                      if($i == $page){
                                        echo '<li><a style="color:#ffffff;background:#65CEA7;" href="?parent_cat='.$_GET['parent_cat'].'&page='.$i.'">'.$i.'</a></li>';
                                      }else{
                                        echo '<li><a href="?parent_cat='.$_GET['parent_cat'].'&page='.$i.'">'.$i.'</a></li>';
                                      }
                                    }
                                ?>
                                <li>
                                  <a href="?parent_cat=<?php echo $_GET['parent_cat']; ?>&page=<?php echo $pageright;?>" aria-label="Next">
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

