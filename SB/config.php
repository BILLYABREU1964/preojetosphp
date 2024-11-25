<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = "";
$dbName = 'dbcadsb';




$conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);


   


  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['sexo'];
  $data_nascimento = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['Estado'];
  $endereço = $_POST['endereco'];
  
  $sql =  "INSERT INTO users(nome,email,senha, telefone, sexo, data_nascimento, cidade, estado, endereço)VALUES('$nome', '$email','$senha', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$estado','$endereço')";
   


if(mysqli_query($conn,$sql)){

    echo "novo usuário cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar: " .mysqli_error($conn);
}

mysqli_close($conn);

?>