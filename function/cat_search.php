<?php
require 'conn.php';
$query = "select cid, cat_name from category where (parent_cat=".$root_cat." or cid=".$root_cat.") and cat_delete=0";
$res = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($res)){
    $cid = $row['cid'];
    $cat_name = $row['cat_name'];
    if($cat_name == '无'){
    	$cat_name = '所有1级分类';
    }
?>
	<li><a href="category_list.php?parent_cat=<?php echo $cid; ?>"><?php echo $cat_name; ?></a></li>
<?php
}
?>