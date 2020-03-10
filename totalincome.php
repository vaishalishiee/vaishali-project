<?php
$host="localhost";
$user="root";
$password="";
$database="villageresident";

$con=mysql_connect($host,$user,$password);
mysql_select_db($database,$con);

$totalincome=$husbandincome+$wifeincome;
$totalincome=mysql_query("select * from villageresident_detail ");
while($row=mysql_fetch_array($totalincome))
{
echo 'totalincome';
}
?>