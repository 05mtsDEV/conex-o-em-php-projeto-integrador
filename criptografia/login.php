<?php

if(isset($_POST['email'])){

    include("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM tb_senhas WHERE email = '$email' LIMIT 1";
    // LIMIT 1 só permite rodar uma vez
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    
    if(password_verify($senha,$usuario['senha'])) {
        //echo "Usuário Logado";
        header('location:home.php');
    } else {
        //echo "Falha ao logar! Senha ou e-mail incorretos";
        header('location:errologin.php');
    }
}

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email"><br>
        <input type="text" name="senha"><br>
        <button type="submit">Logar</button>
    </form> 
    
</body>
</html>