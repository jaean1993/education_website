<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connect = "sql100.phpnet.us";
$database_connect = "pn_16233392_usrp";
$username_connect = "pn_16233392";
$password_connect = "931128";
$news = mysql_pconnect($hostname_news, $username_news, $password_news) or trigger_error(mysql_error(),E_USER_ERROR); 
?>