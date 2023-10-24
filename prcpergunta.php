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
    $pergunta = $_POST['pergunta'];
    $logado = $_POST['logado'];
    $categoria_id = $_POST['categoria'];
     // Aqui você obtém o valor de $logado
    // ...
}

$sql = "INSERT INTO perguntas (pergunta, categoria_id) VALUES ('$pergunta','$categoria_id')";

if ($conexao->query($sql) === TRUE) {
    header('Location: sistema.php');
        exit; // Certifique-se de sair do script após o redirecionamento
   
} else {
    echo "Erro ao enviar a pergunta: " . $conexao->error;
}



$conexao->close();
?>

// Conecte-se ao banco de dados (mesmo código de conexão que você já tem)

// Consulta SQL para recuperar todas as perguntas da tabela 'perguntas'


