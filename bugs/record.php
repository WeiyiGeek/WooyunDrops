<?php
require('conn.php');
$wybug_id=$_GET['wybug_id'];
$timeoffset = 8;
$sql = sprintf("insert into record(wybug_id,rtime) value ('%s',now())",mysql_real_escape_string($wybug_id));
@$record = mysql_query($sql);
mysql_close($conn);
echo "<script>window.location.href='/bugs/bug_detail.php?wybug_id=".$wybug_id."'</script>"
?>
