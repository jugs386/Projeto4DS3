<?php
require_once 'Suco.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Suco</title>
</head>
<body>
    <h3> Cadastro de Suco</h3>
    <form action="" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" value=""/><br/>
        <label>Preço: </label>
        <input type="text" name="preco" id="preco" value=""/><br/>
        <label>Sabor: </label>
        <input type="text" name="sabor" id="sabor" value=""><br/>
        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"/>
    </form>
    <?php

    if(isset($_POST['btnCadastrar'])){
        //criar um objeto
        $suco = new Suco();
        $suco->setNome($_POST['nome']);
        $suco->setPreco($_POST['preco']);
        $suco->setSabor($_POST['sabor']);
        echo $suco->mostraBebida();
        if($suco->verificaPreco($_POST['preco']) == true){
            echo "<br/>Dentro do Orçamento";
        }else{
            echo "<br/>Caro";
        }


    }
    
    
    ?>

</body>
</html>
