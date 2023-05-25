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

// Receber os dados do formulário
$user = $_POST['username'];
$pass = $_POST['password'];

// Definir as checkboxes e seus valores correspondentes
$checkboxes = array();
for ($i = 1; $i <= 10; $i++) {
    $checkboxName = "r$i";
    $checkboxValue = isset($_POST[$checkboxName]) ? 1 : 0;
    $checkboxes[$checkboxName] = $checkboxValue;
}

// Preparar a consulta SQL para inserir o novo usuário
$sql = "INSERT INTO usuarios (username, password";
$values = "'$user', '$pass'";

foreach ($checkboxes as $checkbox => $value) {
    $sql .= ", $checkbox";
    $values .= ", $value";
}

$sql .= ") VALUES ($values)";

// Executar a consulta SQL e verificar se ocorreu com sucesso
if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
