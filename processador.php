<?php

require_once 'conexao.php';

$host = 'localhost';
$user = 'root';
$db = 'sistema';
$pass = '';

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verifica a conexão
if($conn->connect_error) {
    die ('Falha na conexão' . $conn->connect_error);
}

// Coleta os dados do formulario
$nome = $_POST['name'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Isso irá prevenir o SQL Injection
$nome = mysqli_real_escape_string($conn, $nome);
$email = mysqli_real_escape_string($conn, $email);
$usuario = mysqli_real_escape_string($conn, $usuario);
$senha = mysqli_real_escape_string($conn, $senha);

// SQL para inserir os dados
$sql = "INSERT INTO usuario (nome, email, usuario, senha) VALUES('$nome', '$email', '$usuario', '$senha')";

if($conn->query($sql) === TRUE){
    echo 'Dados cadastrados com sucesso';
} else {
    echo 'Erro' .  $sql . '<br>' . $conn->error;
}
?>