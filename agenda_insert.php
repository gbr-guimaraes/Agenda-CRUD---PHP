<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('Conexao.php');

$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$datadenascimento=$_POST['datadenascimento'];

$sql =        "INSERT INTO `agenda` ";
$sql = $sql . "(`nome`, `telefone`, `email`, `datadenascimento`) ";
$sql = $sql . "VALUES ('$nome','$telefone','$email', '$datadenascimento')";

$inserir = mysqli_query($conexao,$sql);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar Contato</title>  
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<body>
<div class="action">
	<h1>Contato inserido com sucesso!</h1>
	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>		
</div>
</body>
</html>
