<?php 
$db_host = 'localhost';
$db_user = 'Gothards';
$db_pass = 'Gothards1';
$db_database = 'bdpilot';

$link  = mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_database, $link) or die ("Error connection".mysql_error());
mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
session_start();
?>