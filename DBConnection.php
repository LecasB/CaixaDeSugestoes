<?php

$db_name = 'bdsugestoes';
$link = mysqli_connect('localhost', 'root', '',$db_name);
if(!$link){
	die('Could not connect: ' .mysql_error());
}
?>