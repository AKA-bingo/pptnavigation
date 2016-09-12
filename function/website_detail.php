<?php

$cid = req_sec(isset($_GET['cid']) ? $_GET['cid'] : "");
$wid = req_sec(isset($_GET['wid']) ? $_GET['wid'] : "");

if($wid == ''){
    if($cid == ''){
    $query = "select * from website where ws_delete=0";
    } else{
    $query = "select * from website where cid=".$cid." and ws_delete=0";
    } 
    $res = mysql_query($query);
    $rows = mysql_num_rows($res);
    $pagesize = 20;
    $pagecount = ceil($rows/$pagesize);
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    if($page <= 0){
        $page = 1;
    }else if($page > $pagecount){
        $page = $pagecount;
    }
    $offset = ($page-1)*$pagesize;
    if($pagecount == 1){
        $pageleft = 1;
        $pageright = 1;
    }else{
        if($page <= 1){
            $pageleft = 1;
            $pageright = $page+1;
        }else if ($page >= $pagecount) {
            $pageleft = $page-1;
            $pageright = $pagecount;
        }else{
            $pageleft = $page-1;
            $pageright = $page+1;
        }
    }
    if($cid == ''){
    $query = "select * from website where ws_delete=0 order by ws_priority DESC limit $offset, $pagesize";
    } else{
    $query = "select * from website where cid=".$cid." and ws_delete=0 order by ws_priority DESC limit $offset, $pagesize";
    }
    $res = mysql_query($query);
        while($row = mysql_fetch_array($res)){
            $wid = $row['wid'];
            $ws_name = $row['ws_name'];
            $ws_url = $row['ws_url'];
            $ws_memo = $row['ws_memo'];
            $ws_priority = $row['ws_priority'];
            $cid = $row['cid'];
            $query2 = "select cat_name from category where cid='".$cid."' and cat_delete = 0";
            $res2 = mysql_query($query2);
            $row2 = mysql_fetch_array($res2);
            $parent_cat_name = $row2['cat_name'];
            echo '<tr>
              <td>'.$ws_name.'</td>
              <td class="hidden-phone">'.$ws_url.'</td>
              <td>'.$parent_cat_name.'</td>
              <td><span class="btn btn-success btn-xs">ACTIVE</span></td>
              <td>
                    <a style="color:white;" role="button" type="button" class="btn btn-info btn-xs" href="web_modify.php?wid='.$wid.'">修改</a>
              </td>
              <td><span class="btn btn-primary btn-xs">'.$ws_priority.'</span></td>
              <td>
                    <a style="color:white;" role="button" type="button" class="btn btn-danger btn-xs" href="../function/website_del.php?wid='.$wid.'">删除</a>
              </td>
              </tr>';
        }
}else{
    $query = "select * from website where wid=".$wid;
    $res = mysql_query($query);
    $row = mysql_fetch_array($res);   
    $cid_value = $row['cid'];
    $wid = $row['wid'];
    $ws_name = $row['ws_name'];
    $ws_url = $row['ws_url'];
    $ws_memo = $row['ws_memo'];
    $ws_priority = $row['ws_priority'];
?>
            <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                添加网站:
                            </header>
                            <div class="panel-body">
                                <div role="form" class="form-horizontal adminex-form" >
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">网站名</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="ws_name" class="form-control" value="<?php echo $ws_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">网站链接</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="ws_url" class="form-control" value="<?php echo $ws_url; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">网站描述(选填)</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="ws_memo" class="form-control" value="<?php echo $ws_memo; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">优先级(选填)</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="ws_priority" class="form-control" value="<?php echo $ws_priority; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">父板块</label>
                                        <div class="col-lg-10">
                                          <select id="cid" class="form-control">
                                            <?php require'../function/subcat_list.php'; ?>
                                          </select>
                                        </div>
                                    </div>
                                    <input id="wid" style="display: none;" value="<?php echo $wid; ?>"></input>
                                    <div class="err" style="text-align:center;color:red;"></div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button id="ws_modify_btn" class="btn btn-primary" type="button">修改</button>
                                            <button id="backup" class="btn btn-primary" type="button">返回</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
            </div>
<?php
}
?>

