<?php
$acid = 0;

$query_cat ='select * from category where parent_cat=1 and cat_delete=0 order by cat_priority DESC';
$res_cat = mysql_query($query_cat) or die(mysql_error());
while($row_cat = mysql_fetch_array($res_cat)){//一级分类
	$cat_name = $row_cat['cat_name'];
	$cid_cat = $row_cat['cid'];
	echo '<div id="ads-cat-'.$acid.'" class="ads-cat"></div>
      	  <div class="cat-1">
          <h2><span><span>'.$cat_name.'</span></span></h2>
          <div class="cat-1-content">';
    $acid++;
	$query_subcat = 'select * from category where parent_cat="'.$cid_cat.'" and cat_delete=0 order by cat_priority DESC';
	$res_subcat = mysql_query($query_subcat) or die(mysql_error());
	while ($row_subcat = mysql_fetch_array($res_subcat)) {//二级分类
		$subcat_name = $row_subcat['cat_name'];
		$cid_subcat = $row_subcat['cid'];
		echo '<div class="cat-2">
              <h3>'.$subcat_name.'</h3>
              <ul>';
        $w=0;
		$query_ws = 'select * from website where cid="'.$cid_subcat.'" and ws_delete=0 order by ws_priority DESC limit 0,10';
		$res_ws = mysql_query($query_ws) or die(mysql_error());
		while ($row_ws = mysql_fetch_array($res_ws)) {//网站
			$w++;
			$ws_name = $row_ws['ws_name'];
			$ws_url = $row_ws['ws_url'];
			$ws_memo = $row_ws['ws_memo'];
			if(strlen($ws_memo)>90){
				$ws_memo = substr($ws_memo,0,90);
				$ws_memo = $ws_memo.'...';
			}
			$ws_name = str_replace(':H', '<span class="icon-h">H</span>', $ws_name);
			$ws_name = str_replace(':N', '<span class="icon-n">N</span>', $ws_name);
			echo '<li><a href="'.$ws_url.'">'.$ws_name.'<span class="memo">'.$ws_memo.'</span></a></li>';

		}
		while($w<10){
			echo '<li><a href=""><span class="memo"></span></a></li>';
			$w++;
		}
		echo '</ul>
          	  </div>';
	}
	echo '</div>
		  </div>';
}
?>
