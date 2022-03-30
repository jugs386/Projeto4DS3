<?php
    if(isset($_POST['btnIR'])){
        header('Location:Tela'.$_POST['bebida'].'.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>
</head>
<body>
    <h3>Cadastro de Bebidas</h3>
    <form action="" method="post">
        <input type="radio" name="bebida" id="refrigerante" value="Refrigerante"> Refrigerante <br/>
        <input type="radio" name="bebida" id="suco" value="Suco"> Suco <br/>
        <input type="radio" name="bebida" id="vinho" value="Vinho"> Vinho <br/>
        <input type="submit" name="btnIR" id="btnIR" value="IR">
    </form>    


</body>
</html>