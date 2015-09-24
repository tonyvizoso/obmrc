<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_remote = "obmed.db.10086117.hostedresource.com";
$database_remote = "obmed";
$username_remote = "obmed";
$password_remote = "obMrc286@";
$remote = mysql_pconnect($hostname_remote, $username_remote, $password_remote) or trigger_error(mysql_error(),E_USER_ERROR); 
?>