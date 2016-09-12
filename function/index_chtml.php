<?php 
require 'conn.php';
$chtml = array();
$query='select * from chtml where ch_delete!=1';
$res = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($res)) {
	$chtml[$row['label']] = html_entity_decode($row['ch_code'], ENT_QUOTES, 'UTF-8');
}
?>