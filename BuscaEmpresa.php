<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/busca.css">


<?php
include_once 'conexao.php';
$nome = $_GET['cxnomeb'];

$consulta = "select *from tbempresa
where nome_empresa = '$nome'";


$executar = mysqli_query ($conn,$consulta);


while($linha = mysqli_fetch_array($executar))
{ 
?>


<form class="container" method="POST">
Nome
<input type = "text" 
value="<?php echo $linha ["nome_empresa"]?>">
<br>
<br>
Telefone
<input type = "text" value="<?php echo $linha ["telefone_empresa"]?>">
<br>
<br>
Descrição
<input type = "text" value="<?php echo $linha ["descricao_empresa"]?>">
<br>
</form> 
   
<?php
}
?>


