<?php
session_start();

try
{
	$db = new PDO("mysql:host=localhost;dbname=chambres_d'agriculture",'root','root');
}
catch (Exception $e)
{
	echo "Database Error : ".$e->getmessage();
	exit();
}
?>