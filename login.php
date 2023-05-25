<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = 3306;
$database = "ylog";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Autenticação do usuário (exemplo: usuário e senha vindos do formulário)
$user = $_POST['username'];
$pass = $_POST['password'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM ylog_users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

// Verificar se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Autenticação bem-sucedida
    header("Location: erp/index.html");
    exit;
} else {
    // Autenticação falhou
    echo "Autenticação falhou. Verifique seu usuário e senha.";

    // Redirecionamento para o index do diretório raiz após 3 segundos
    header("refresh:2; url=index.html");
    exit;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
