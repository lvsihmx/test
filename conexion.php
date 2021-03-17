<?php

function conectar (){

$user="ihmx_elvis";
$pass="Television$55";
$server="mysql-ihmx.alwaysdata.net";
$db="ihmx_registro";
$con=mysql_connect({$server,$user,$pass)or die("error al conectar a bd" .msql_error());

mysql_select_db($db,$con);

return $con;

?>