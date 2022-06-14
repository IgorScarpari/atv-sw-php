<?php
require_once "includes/db.php";

$method = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
if ($method === "POST")
{
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$marca = $_POST['marca'];
	$categoria = $_POST['categoria'];

	if ($nome != "" && $descricao != "" && $marca != "" && $categoria != "" )
	{
		$stmt = $db->prepare("INSERT INTO produtos(nome,descricao,marca,categoria) VALUES(:nome,:descricao,:marca,:categoria)");
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':descricao', $descricao);
		$stmt->bindParam(':marca', $marca);
		$stmt->bindParam(':categoria', $categoria);
		$stmt->execute();

		header("Location: registroSalvo.php");
	}
	else
	{
		header("Location: registroNSalvo.php");
	}
}
else
{
	header("Location: index.php");
}
