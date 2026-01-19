<?php
// Iniciar sessão
session_start();

// Conectar ao banco de dados
$dbHost     = 'database-2.cnw8wq9dfpdx.us-east-1.rds.amazonaws.com';
$dbUsername = 'admin';
$dbPassword = 'projetoaws';
$dbName     = 'projeto'; // Nome do banco de dados

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar a conexão
if ($conn->connect_error) {
    die('Conexão falhou: ' . $conn->connect_error);
}

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

// Obter o CPF do usuário logado
$usuario = $_SESSION['usuario'];

$sql    = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user     = $result->fetch_assoc();
    $cpf_user = $user['cpf'];
} else {
    echo 'Usuário não encontrado!';
    exit();
}

// Processar o formulário de telefone
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $telefone = $_POST['telefone'];

    // Inserir novo número de telefone na tabela
    $sql_insert = "
        INSERT INTO telefone (cpf_user, ntelefone)
        VALUES ('$cpf_user', '$telefone')
    ";

    if ($conn->query($sql_insert) === true) {
        echo 'Número de telefone adicionado com sucesso!';
    } else {
        echo 'Erro ao adicionar telefone: ' . $conn->error;
    }
}

// Fechar a conexão
$conn->close();

// Redirecionar de volta para o perfil após adicionar o telefone
header('Location: perfil.php');
exit();
?>
