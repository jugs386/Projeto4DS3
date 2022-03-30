<?php
require_once 'Vinho.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
</head>
<body>
    <h3>Cadastro de Vinho</h3>
    <form action="" method="post">
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value=""/><br/>
        <label for="">Preco:</label>
        <input type="text" name="preco" id="preco" value=""/><br/>
        <label for="">Safra:</label>
        <input type="text" name="safra" id="safra" value=""/><br/>
        <label for="">Tipo:</label>
        <input type="text" name="tipo" id="tipo" value=""><br/>
        <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar"/> 
        <br/>
    </form>
    <?php
        if(isset($_POST['btnCadastrar'])){
            $vinho = new Vinho();
            $vinho->setNome($_POST['nome']);
            $vinho->setPreco($_POST['preco']);
            $vinho->setSafra($_POST['safra']);
            $vinho->setTipo($_POST['tipo']);
            echo $vinho->mostraBebida();
            if($vinho->verificaPreco($_POST['preco']) == true){
                echo "<br/>Dentro do Orçamento";
            }else{
                echo "<br/>Caro";
            }
        }
    ?>
</body>
</html>