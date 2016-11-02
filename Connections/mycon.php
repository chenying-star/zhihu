<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mycon = "localhost";
$database_mycon = "zhiwen";
$username_mycon = "root";
$password_mycon = "root";
$mycon = mysql_pconnect($hostname_mycon, $username_mycon, $password_mycon) or trigger_error(mysql_error(),E_USER_ERROR); 
?>