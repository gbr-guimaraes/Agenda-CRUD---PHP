<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Agenda</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>

<body>
	<div class="topnav">
    	<h1>Agenda</h1>
		<p>Desenvolvido por:<br>Gabriel Guimarães Felix</p>
	</div>
	<div class="content">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nome</th>
					<th scope="col">Telefone</th>
					<th scope="col">Email</th>
					<th scope="col">Data de Nascimento</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
					<tr>
							<?php
						include('Conexao.php');

						$sql = "select * from agenda;";
						$busca = mysqli_query($conexao,$sql);

						while ($array = mysqli_fetch_array($busca)) {
							$id = $array['id'];
							$nome = $array['nome'];
							$telefone = $array['telefone'];
							$email = $array['email'];
							$datadenascimento = $array['datadenascimento'];
						
						
						
						echo '<td>' . $id . '</td>';
						echo '<td>' . $nome . '</td>';
						echo '<td>' . $telefone . '</td>';
						echo '<td>' . $email . '</td>';
						echo '<td>' . $datadenascimento . '</td>';
						echo '<td class="buttons"> <a class="editar" href="agendaedit.php?id=' . $id .'" role="button"><i class="far fa-edit"></i> Editar</a>';
						echo ' <a class="excluir" href="agenda_delete.php?id=' . $id .'" role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>';	

						echo '</tr>';
						
						} ?>
					</tr>
					
				</tbody>
		</table>
	</div>
	<div class="footer">
		<a href="agendaadd.php" class="add">Adicionar Contato</a>
	</div>
</body>

</html>