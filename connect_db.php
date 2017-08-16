<?php

//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database

$hostname="sql209.epizy.com";
$username="epiz_20504583";
$password="6X9QIP6e";
$dbname="epiz_20504583_usuario";


$mysqli = new MySQLi($hostname,$username, $password,$dbname) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);
?>