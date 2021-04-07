<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Adicionar Contato</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<body>
    <div class="topnav">
        <h1>Adicionar Contato </h1>
    </div>
    <form action="agenda_insert.php" method="post">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" placeholder="Digite o Nome" required>
    </div>
    <div class="form-group">
        <label>Telefone</label>
        <input type="text" class="form-control" id="telefone" autocomplete="off" name="telefone" placeholder="Digite o Telefone" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Digite o Email" required>
    </div>
    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" class="form-control" id="datadenascimento" name="datadenascimento" placeholder="Digite a Data de Nascimento" required>
    </div>

    <div class ="btnform">
        <a href="index.php" role="button" class="btnvoltar">Voltar</a>
        <button type="submit" id="botao" class="btnconfirmar">Cadastrar</button>
    </div>
    </form>
</body>
</html>