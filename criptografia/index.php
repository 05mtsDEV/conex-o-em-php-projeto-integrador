<?php 
/* banco criado: senhas  
tabela: senhas
id int primary key A_I
senha varchar 255
email varchar 255
*/

if(isset($_POST['email'])){
    include('conexao.php');
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $mysqli->query("INSERT INTO tb_senhas (email, senha) VALUES ('$email','$senha')");
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
    Cadastrar Senha
    <form action="" method="post">
        <input type="text" name="email">
        <input type="text" name="senha">
        <button type="submit">Cadastrar senha</button>
    </form> 

</body>
</html>

