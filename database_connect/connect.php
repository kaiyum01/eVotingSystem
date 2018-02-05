<?php

$host="localhost";
$user="userName";
$pass="passWord";
$db="DBname";
$connect=  mysql_connect($host,$user,$pass) or die(mysql_error()."Your Data base is not connected");
$selectDb=  mysql_select_db($db,$connect) or die(mysql_error()."Your Database is not selected");
