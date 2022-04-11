<?php

    if($_POST["cxnome"] !== ""){

        include_once ('./conexao.php');
        $nome = $_POST ["cxnome"];
        $descricao = $_POST ["cxdescricao"];
        $fone = $_POST ["cxtelefone"];


        // chamando o mysql

        $sql = "insert into tbempresa (nome_empresa,descricao_empresa,telefone_empresa) values ('$nome','$descricao','$fone')";
        


        // chamando o $conn e o $sql no arquivo conexão
        
        $query = mysqli_query($conn,$sql);
        echo "Dados Cadastrados...";
        
    }
    else
    {
        echo "Erro de conexão";
    }

?>