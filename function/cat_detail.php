<?php

$parent_cat = req_sec(isset($_GET['parent_cat']) ? $_GET['parent_cat'] : "");
$cid = req_sec(isset($_GET['cid']) ? $_GET['cid'] : "");

if($cid == ''){
    if($parent_cat == ''){
    $query = "select * from category where cat_delete=0 and parent_cat !=-1";
    } else{
    $query = "select * from category where cat_delete=0 and parent_cat=".$parent_cat;
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
    if($parent_cat == ''){
    	$query = "select * from category where cat_delete=0 and parent_cat !=-1 order by cat_priority DESC limit $offset, $pagesize";
    }else{
    	$query = "select * from category where cat_delete=0 and parent_cat=".$parent_cat." order by cat_priority DESC limit $offset, $pagesize";
    }
    $res = mysql_query($query);
    while($row = mysql_fetch_array($res)){
        $cid = $row['cid'];
        $cat_name = $row['cat_name'];
        $cat_memo = $row['cat_memo'];    
        $parent_cat = $row['parent_cat'];
        $cat_icon = $row['cat_icon'];
        $cat_priority = $row['cat_priority'];
        $query2 = "select cat_name from category where cid='".$parent_cat."' and cat_delete = 0";
    	$res2 = mysql_query($query2);
    	$row2 = mysql_fetch_array($res2);
    	$parent_cat_name = $row2['cat_name'];
        echo '<tr>
    	  <td>'.$cat_name.'</td>
    	  <td>'.$parent_cat_name.'</td>
    	  <td class="hidden-phone">'.$cat_memo.'</td>
    	  <td><span class="btn btn-success btn-xs">ACTIVE</span></td>
    	  <td>
                <a style="color:white;" role="button" type="button" class="btn btn-info btn-xs" href="cat_modify.php?cid='.$cid.'">修改</a>
    	  </td>
    	  <td><span class="btn btn-primary btn-xs">'.$cat_priority.'</span></td>
    	  <td>
                <a style="color:white;" role="button" type="button" class="btn btn-danger btn-xs" href="../function/cat_del.php?cid='.$cid.'">删除</a>
    	  </td>
    	  </tr>';
    }
}else{
	$query = "select * from category where cid=".$cid;
	$res = mysql_query($query);
	$row = mysql_fetch_array($res);
    $cid_value = $row['cid'];
	$cat_name = $row['cat_name'];
	$cat_memo = $row['cat_memo'];
	$parent_cat = $row['parent_cat'];
    $cat_icon = $row['cat_icon'];
	$cat_priority = $row['cat_priority'];
?> 
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            添加板块:
                        </header>
                            <div class="panel-body">
                                <div role="form" class="form-horizontal adminex-form" >
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">板块名</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="cat_name" class="form-control" value="<?php echo $cat_name; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">板块描述(选填)</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="cat_memo" class="form-control" value="<?php echo $cat_memo; ?>">
                                    </div>
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <label class="col-lg-2 control-label">图片链接(选填)</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="cat_icon" class="form-control" value="<?php echo $cat_icon; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">优先级(选填)</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="cat_priority" class="form-control" value="<?php echo $cat_priority; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">父板块</label>
                                        <div class="col-lg-10">
                                          <select id="parent_cat" class="form-control">
                                            <?php require'cat_list.php'; ?>
                                          </select>
                                        </div>
                                    </div>
                                    <input id="cid" style="display: none;" value="<?php echo $cid_value; ?>">
                                    <div class="err" style="text-align:center;color:red;"></div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button id="cat_modify_btn" class="btn btn-primary" type="button">修改</button>
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


