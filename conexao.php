<?php
$host = 'localhost';
$db = 'sistema';
$user = 'root';
$pass = '';

// Bloco try-catch usado para tentar conectar ao banco e capturar qualquer erro
try {
    // Cria uma nova conexão PDO com os dados fornecidos:
    // "mysql:host=$host;dbname=$db;charset=utf8" => define o tipo de banco (MySQL), o host, o banco e o charset
    // $user e $pass são as credenciais de acesso
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

    // Define o modo de erro do PDO para lançar exceções em caso de erro (melhor para depuração)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Se a conexão for bem-sucedida, exibe esta mensagem
    // echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    // Em caso de erro, interrompe o script e exibe a mensagem de erro
    die("Erro na conexão: " . $e->getMessage());
}
?>