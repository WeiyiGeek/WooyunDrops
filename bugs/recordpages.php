<?php
require('conn.php');
@$page_id=$_GET['page_id'];
@$back=$_GET['back'];
@$action = $_GET['action'];
$timeoffset = 8;
$sql = sprintf("select page_id from recordbook where page_id = '%s'",mysql_real_escape_string($page_id));
@$record = mysql_query($sql);
@$record_detail = mysql_fetch_array($record);
if ($record_detail['page_id'] && empty($action)){
    # 已阅读
   echo "1";
} else if(!$record_detail['page_id'] && $action == "update") {
    # 标记阅读&并返回原页
   $record = mysql_query(sprintf("insert into recordbook(page_id,rtime) value ('%s',now())",mysql_real_escape_string($page_id)));
   $back = sprintf("<script>window.location.href='/#!/drops/%s';</script>",base64_decode($back));  # 注意一定要编码
   echo $back;
} else {
    # 未阅读
   echo "0";
}
mysql_close($conn);
?>