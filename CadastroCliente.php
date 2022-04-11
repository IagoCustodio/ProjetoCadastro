<!doctype html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <style>
    fieldset{width:600px;margin:auto;}
    </style>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">CADASTRAR EMPRESA<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="BuscaNomeEmpresa.php">BUSCAR EMPRESA<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="CadastroCliente.php">CADASTRAR FUNCIONARIO<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <form class="container" method="POST" action="inserirDadosCliente.php">
        <fieldset>
            <h1>CADASTRAR FUNCIONARIO</h1><br>
            <input type="text" name="cxnome" placeholder="Nome">
            <input type="text" name="cxidade" placeholder="Idade">
            <input type="date" name="cxdn" placeholder="Data de Nascimento">
            <input type="text" name="cxsalario" placeholder="Salário">
            <input type="text" name="cxaltura" placeholder="Altura">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="nav-link" href="listarDadosCliente.php">Listar dados cadastrado<span class="sr-only">(current)</span></a>
        </fieldset>
    </form>
</body>
</html>

