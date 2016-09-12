<?php
require 'conn.php';
$query = "select * from admin where level=1";
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
$query = "select * from admin where level=1 limit $offset, $pagesize";
$res = mysql_query($query);
while($row = mysql_fetch_array($res)){
    $aid = $row['aid'];
    $username = $row['username'];
    $lastip = $row['lastip'];
    $lasttime = $row['lasttime'];
    echo '<tr>
	  <td>'.$username.'</td>
	  <td>'.$lasttime.'</td>
	  <td>'.$lastip.'</td>
	  <td><span class="btn btn-success btn-xs">ACTIVE</span></td>
	  <td>
            <a style="color:white;" role="button" type="button" class="btn btn-danger btn-xs" href="../function/psw_reset.php?aid='.$aid.'">重置密码</a>
	  </td>
	  </tr>';
}

?>
