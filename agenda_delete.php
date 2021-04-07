<?php
include('conexao.php');

$id = $_GET['id'];

$sql =        "DELETE FROM agenda ";
$sql = $sql . "WHERE id=$id;";

$inserir = mysqli_query($conexao,$sql);

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Excluir Contato</title>  
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<body>
<div class="action">
	<h1>Contato excluído com sucesso!</h1>
	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>		
</div>
</body>
</html>
