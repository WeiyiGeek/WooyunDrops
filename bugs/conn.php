<?php
@$conn=mysql_connect("localhost","root","weiyigeek") or die("error connecting") ;
mysql_select_db("wooyun", $conn);
mysql_query("SET NAMES 'UTF8'"); 						 
?>