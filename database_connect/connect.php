<?php

$host="abdulkaiyum.com";
$user="kaiyum123";
$pass="X42e77HHOmikAH";
$db="kaiyum12_evoting";
$connect=  mysql_connect($host,$user,$pass) or die(mysql_error()."Your Data base is not connected");
$selectDb=  mysql_select_db($db,$connect) or die(mysql_error()."Your Database is not selected");