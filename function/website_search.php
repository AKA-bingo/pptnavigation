<?php
require 'conn.php';
$query = "select cid, cat_name from category where parent_cat!=1 and cid!=1 and cat_delete=0";
$res = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($res)){
    $cid = $row['cid'];
    $cat_name = $row['cat_name'];
?>
	<li><a href="web.php?cid=<?php echo $cid; ?>"><?php echo $cat_name; ?></a></li>
<?php
}
?>