<?php
require 'conn.php';
$query = "select * from chtml";
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
    }else if ($page >= $pagecount){
        $pageleft = $page-1;
        $pageright = $pagecount;
    }else{
        $pageleft = $page-1;
        $pageright = $page+1;
    }
}
$query = "select * from chtml limit $offset, $pagesize";
$res = mysql_query($query);
while($row = mysql_fetch_array($res)){
    $hid = $row['hid'];
    $label = $row['label'];
    $ch_note = $row['ch_note'];
    $ch_delete = $row['ch_delete'];
?>
                    <tr>
                          <td><?php echo $label; ?></td>
                          <td><?php echo $ch_note; ?></td>

<?php
    if($ch_delete == 2){
?>
                          <td><span class="btn btn-success btn-xs">ACTIVE</span></td>
                          <td>
                            <a  style="color:white;" role="button" type="button" class="btn btn-primary btn-xs disbeled" href="chtml_modify.php?hid=<?php echo $hid; ?>">修改</a>
                          </td>
                          <td>
                            <a style="color:white;" role="button" type="button" class="btn btn-info btn-xs disabled" href="#">不可下架</a>
                          </td>
                          <td>
                            <a style="color:white;" role="button" type="button" class="btn btn-danger btn-xs disabled" href="#">不可删除</a>
                          </td>
<?php
    }else if($ch_delete == 0){
?>
                          <td><span class="btn btn-success btn-xs">ACTIVE</span></td>
                          <td>
                            <a  style="color:white;" role="button" type="button" class="btn btn-primary btn-xs disbeled" href="chtml_modify.php?hid=<?php echo $hid; ?>">修改</a>
                          </td>
                          <td>
                            <a style="color:white;" role="button" type="button" class="btn btn-info btn-xs" href="../function/chtml_setstatus.php?type=down&hid=<?php echo $hid; ?>">下架</a>
                          </td>
                          <td>
                            <a style="color:white;" role="button" type="button" class="btn btn-danger btn-xs" href="../function/chtml_del.php?hid=<?php echo $hid; ?>">删除</a>
                          </td>
<?php
    } else{
?>
                          <td><span class="btn btn-info btn-xs">INACTIVE</span></td>
                          <td>
                            <a  style="color:white;" role="button" type="button" class="btn btn-primary btn-xs disbeled" href="chtml_modify.php?hid=<?php echo $hid; ?>">修改</a>
                          </td>
                          <td>
                            <a style="color:white;" role="button" type="button" class="btn btn-success btn-xs" href="../function/chtml_setstatus.php?type=up&hid=<?php echo $hid; ?>">上架</a>
                          </td>
                          <td>
                            <a style="color:white;" role="button" type="button" class="btn btn-danger btn-xs" href="../function/chtml_del.php?hid=<?php echo $hid; ?>">删除</a>
                          </td>
                    </tr>
<?php
    }
} 
?>