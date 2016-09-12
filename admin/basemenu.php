<!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="admin.php"><img src="../images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="admin.php"><img src="../images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <div class="media-body">
                        <h4><a href="#">
                        <?php echo $_SESSION['username'];?></a></h4>
                    </div>
                </div>

                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li>
                        <a href="psw_modify.php"><i class="fa fa-cog"></i> <span>修改密码</span></a>
                    </li>
                    <li>
                        <a href="#"><span>上一次登陆IP:<?php echo $_SESSION['lastip'];  ?></span></a>
                    </li>
                    <li>
                        <a href="#"><span>上一次登陆时间:<?php echo $_SESSION['lasttime']; ?></span></a>
                    </li>
                    <li>
                        <a href="logout.php"><span>退出登录</span></a>
                    </li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list">
                    <a href=""><i class="fa fa-laptop"></i> <span>网站管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="web.php"> 网站列表</a></li>
                        <li><a href="web_add.php"> 添加网站</a></li>
                    </ul>
                </li>
                <li class="menu-list">
                    <a href=""><i class="fa fa-home"></i> <span>分类管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="category_list.php"> 分类列表</a></li>
                        <li><a href="category_add.php"> 添加分类</a></li>
                    </ul>
                </li>
                <li class="menu-list">
                    <a href=""><i class="fa fa-spinner"></i> <span>模板标签管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="chtml.php">模板标签列表</a></li>
                        <li><a href="chtml_add.php"> 添加模板标签</a></li>
                    </ul>
                </li>
                <?php 
                    if($_SESSION['level'] == 100){
                        echo '
                        <li class="menu-list">
                            <a href=""><i class="fa fa-user"></i><span>管理员管理</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="admin_list.php">管理员列表</a></li>
                                <li><a href="admin_add.php">添加管理员</a></li>
                            </ul>
                        </li>
                        ';
                    }
                ?>
                <li>
                    <a href="http://hao.loveppt.cn"><i class="fa fa-sign-in"></i> <span>返回首页</span></a>
                </li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->


            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li>
                                <a href="psw_modify.php"><i class="fa fa-cog"></i> 修改密码</a>
                            </li>
                            <li>
                                <a>上一次登陆IP:<?php echo $_SESSION['lastip'];  ?></a>
                            </li>
                            <li>
                                <a>上一次登陆时间:<?php echo $_SESSION['lasttime']; ?></a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="fa fa-sign-out"></i>退出登录</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->
