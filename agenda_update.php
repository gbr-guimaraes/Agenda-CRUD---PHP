<?php

include('conexao.php');

$id=$_POST['id'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$datadenascimento=$_POST['datadenascimento'];

$sql =        "UPDATE agenda SET ";
$sql = $sql . "telefone='$telefone', ";
$sql = $sql . "nome='$nome', ";
$sql = $sql . "datadenascimento='$datadenascimento', ";
$sql = $sql . "email='$email' ";
$sql = $sql . "WHERE id=$id;";

$inserir = mysqli_query($conexao,$sql);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Contato</title>  
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<body>
	<div class="action">
		<h1>Contato atualizado</h1>
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>		
	</div>
</body>
</html>
