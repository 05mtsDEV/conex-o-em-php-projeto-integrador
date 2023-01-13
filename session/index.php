<?php

// abri a conexão fora no início para atender a session

include('conexao.php');

// iniciar a session
if(!isset($_SESSION)) session_start();
// verificar se a variavel existe
if(!isset($_SESSION['usuario'])) 
    die('Voce não está logado. <a href="login.php">Clique aqui</a> para logar.');

if(isset($_POST['email'])){
    
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $mysqli->query("INSERT INTO senhas (email, senha) VALUES ('$email','$senha')");
}

// capturando o id
$id = $_SESSION['usuario'];
// fazendo a consulta do id
$sql_query = $mysqli->query("SELECT * FROM senhas WHERE id = '$id'") or die($mysqli->error);
// vinculando o usuario
$usuario = $sql_query->fetch_assoc();
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
    <p>Bem vindo, <?php echo $usuario['email']; ?></p>
    <h1>Cadastrar</h1>
    <form action="" method="post">
        <p>
          <label for="email">E-mail</label> 
          <input type="text" name="email">
        </p>
        <p>
          <label for="senha">Senha</label>
          <input type="text" name="senha">
        </p>
        <button type="submit">Cadastrar</button>
    </form> 
    <p><a href="logout.php">Sair</a>

</body>
</html>