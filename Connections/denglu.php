<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_denglu = "sql100.phpnet.us";
$database_denglu = "pn_16233392_usrp";
$username_denglu = "pn_16233392";
$password_denglu = "931128";
$denglu = mysql_pconnect($hostname_denglu, $username_denglu, $password_denglu) or trigger_error(mysql_error(),E_USER_ERROR); 
?>