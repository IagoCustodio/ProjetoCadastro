<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/busca.css">
    <title>Document</title>
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
    <form class="container" action="./BuscaEmpresa.php" method="GET">
        <h2>BUSCA EMPRESA</h2>
        <div class="form-group">
            <label for="formGroupExampleInput"></label>
            <input type="text" class="form-control" size="50" name="cxnomeb" id="formGroupExampleInput" placeholder="Empresa">
        </div>
        <button type="submit" class="btn btn-primary">Enviar Dados</button>
    </form>  
</body>
</html>
