<?php
include('conexao.php');

$id = $_GET['id'];

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Editar Contato</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<body>
    <div class="topnav">
        <h1>Editar Contato </h1>
    </div>

    <?php
    $sql = "select * from agenda where id=$id";
    $busca = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($busca)){
    	$id = $array['id'];
    	$nome = $array['nome'];
    	$telefone = $array['telefone'];
    	$email = $array['email'];
        $datadenascimento = $array['datadenascimento'];
    }
    ?>

    <form action="agenda_update.php" method="post">
    <input type="text" class="form-control" id="id" autocomplete="off" name="id" value="<?php echo $id ?>" style="display: none;">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" value="<?php echo $nome ?>" required>
    </div>
    <div class="form-group">
        <label>Telefone</label>
        <input type="text" class="form-control" id="telefone" autocomplete="off" name="telefone" value="<?php echo $telefone ?>" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email ?>" required>
    </div>
    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" class="form-control" id="datadenascimento" name="datadenascimento" value="<?php echo $datadenascimento ?>" required>
    </div>

    <div class="btnform">
        <a href="index.php" role="button" class="btnvoltar">Voltar</a>
        <button type="submit" id="botao" class="btnconfirmar">Confirmar</button>
    </div>
    </form>
</body>
</html>