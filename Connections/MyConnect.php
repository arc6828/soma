<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_MyConnect = "localhost";
$database_MyConnect = "soma";
$username_MyConnect = "root";
$password_MyConnect = "";
$MyConnect = mysqli_connect($hostname_MyConnect, $username_MyConnect, $password_MyConnect,$database_MyConnect) or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_query($MyConnect, "Set Names UTF8");
?>