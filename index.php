<!DOCTYPE html>
<?php require 'function/index_chtml.php'; ?>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $chtml['tittle']; ?></title>
    <meta name="keywords" content="<?php echo $chtml['keywords']; ?>" >
    <meta name="description" content="<?php echo $chtml['description']; ?>" >
    <link rel="stylesheet" type="text/css" href="css/index/style.css">
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="logo"></div>
        <div class="navbar">
          <a class="active"  href="">首页</a>
          <?php echo $chtml['navbar']; ?>
        </div>
      </div>
    </div><!-- .header -->

    <div class="container">

      <?php require 'function/index.php'; ?>

    </div><!-- .container -->

    <div class="ads-qrcode">
      <?php echo $chtml['qrcode']; ?>
    </div>

    <div class="ads-bottom">
      <div class="container">
        <?php echo $chtml['ads-bottom']; ?>
      </div>
    </div><!-- .ads-bottom -->

    <div class="footer">
      <?php echo $chtml['copyright']; ?>
    </div>

<script type="text/javascript">
    document.getElementById("ads-cat-0").innerHTML='<?php echo $chtml['ads-cat-0']; ?>';
    document.getElementById("ads-cat-1").innerHTML='<?php echo $chtml['ads-cat-1']; ?>';
</script>
  </body>
</html>