<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connect = "localhost";
$database_connect = "news";
$username_connect = "root";
$password_connect = "931128";
$connect = mysqli_connect($hostname_connect, $username_connect, $password_connect,$database_connect) or die(mysql_error());
?>