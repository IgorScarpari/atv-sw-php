<?php
try {
	$db = new PDO('mysql:dbname=phpmyadmin;host=localhost:3306', "root", "");
}
catch (PDOException $err)
{
	echo 'Erro ao conectar com o MySQL: ' . $err->getMessage();
	exit;
}
