<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Desafio Informe seus Dados</title>
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
    <h1 class="display-1">FORMULARIO</h1>
    <form class="container" action="./InserirEmpresa.php" method="POST">
        <h2>CADASTRAR EMPRESA</h2>
        <div class="form-group">
            <label for="formGroupExampleInput"></label>
            <input type="text" class="form-control" name="cxnome" id="formGroupExampleInput" placeholder="Empresa">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"></label>
            <input type="text" class="form-control" name="cxtelefone" id="formGroupExampleInput2" placeholder="Telefone">
        </div>
        <div class="form-group">
          <label for="cxdescricao">DESCRIÇÃO</label>
          <textarea class="form-control" name="cxdescricao" id="cxescricao" rows="3" placeholder="Descrição"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Dados</button>
    </form>  
  </body>
</html>