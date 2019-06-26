<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true" 
$hostname_dbsite = "localhost";
$database_dbsite = "autocarro";
$username_dbsite = "root";
$password_dbsite = "";

$dbsite = mysql_pconnect($hostname_dbsite, $username_dbsite, $password_dbsite) or trigger_error(mysql_error(),E_ALL); 
?>