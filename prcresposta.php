<?php
// Conecte-se ao banco de dados (substitua com suas próprias credenciais)
$servername = "localhost";
$username = "root";
$password = "707594Mic";
$dbname = "danidani606";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $pergunta_id = $_POST["pergunta_id"];
    $resposta = $_POST["resposta"];
    $usuario = $_POST["logado"];

    // Prepare a consulta SQL para inserir a resposta no banco de dados
    $sql = "INSERT INTO answers (pergunta_id, resposta, usuario) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("is", $pergunta_id, $resposta, $usuario);

    // Execute a consulta SQL
    if ($stmt->execute()) {
        // Redirecione de volta à página de origem (pagina_resposta.php)
        header("Location: pagina_resposta.php?pergunta_id=$pergunta_id");
        exit();
    } else {
        echo "Erro ao inserir a resposta: " . $conexao->error;
    }

    $stmt->close();
}

$conexao->close();
?>
