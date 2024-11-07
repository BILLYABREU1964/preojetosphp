<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_banco";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome', '$email', '$senha')";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if(mysqli_query($conn,$sql)){

    echo "novo usuário cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar: " .mysqli_error($conn);
}

mysqli_close($conn);

?>