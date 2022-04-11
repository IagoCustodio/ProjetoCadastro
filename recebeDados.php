<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Dados recebidos</title>
  </head>
  <body>
    <h1 class="display-1">Formulario</h1>
    <div class="alert alert-primary" role="alert">
        <p class="text-center">Dados Recebidos</p>
    </div>
    <form class="container" action="" method="POST">
        <h2>CADASTRAR</h2>
        <div class="form-group">
            <label for="formGroupExampleInput"></label>
            <input type="text" class="form-control" name="cxnome" id="formGroupExampleInput" placeholder="Empresa" value="<?php echo$_POST['cxnome']?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"></label>
            <input type="text" class="form-control" name="cxtelefone" id="formGroupExampleInput2" placeholder="Telefone" value="<?php echo$_POST['cxtelefone']?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1" value="<?php echo$_POST['cxdescricao']?>">DESCRIÇÃO</label>
          <textarea type="text" class="form-control" name="cxdescricao" id="exampleFormControlTextarea1" rows="3" value="<?php echo$_POST['cxdescricao']?>"></textarea>
        </div>
    </form>  
  </body>
</html>