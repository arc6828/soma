<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MyConnect = "localhost";
$database_MyConnect = "soma";
$username_MyConnect = "root";
$password_MyConnect = "rootroot";
$MyConnect = mysqli_pconnect($hostname_MyConnect, $username_MyConnect, $password_MyConnect) or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_query("Set Names UTF8");
?>