<?php 
phpinfo();
$con=mssql_connect('localhost','DESKTOP-7C21OS4\apo','DESKTOP-7C21OS4\apo','DBSaleCop');
$con->set_charset("utf8");
if(!con)
{
	die('hata:');
}
?>