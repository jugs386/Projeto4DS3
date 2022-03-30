<?php
require_once 'Refrigerante.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Refrigerante</title>
</head>
<body>
    <h3> Cadastro de Refrigerante</h3>
    <form action="" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" value=""/><br/>
        <label>Preço: </label>
        <input type="text" name="preco" id="preco" value=""/><br/>
        <label>Retornavel: </label>
        <select name="retornavel" id="retornavel">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select><br/>
        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"/>
    </form>
    <?php

    if(isset($_POST['btnCadastrar'])){
        //criar um objeto
        $refrigerante = new Refrigerante();
        $refrigerante->setNome($_POST['nome']);
        $refrigerante->setPreco($_POST['preco']);
        $refrigerante->setRetornavel($_POST['retornavel']);
        echo $refrigerante->mostraBebida();
        if($refrigerante->verificaPreco($_POST['preco']) == true){
            echo "<br/>Dentro do Orçamento";
        }else{
            echo "<br/>Caro";
        }


    }
    
    
    ?>

</body>
</html>
