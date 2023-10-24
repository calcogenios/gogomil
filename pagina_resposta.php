<!DOCTYPE html>
<html lang="en">
<head>


    <script>
function hideIconBar(){

var iconBar = document.getElementById("iconBar");
var navegation = document.getElementById("navegation");
iconBar.setAttribute("style", "display:none;");
navegation.classList.remove("hide"); 
}
function showIconBar(){
    var iconBar = document.getElementById("iconBar");
var navegation = document.getElementById("navegation");
iconBar.setAttribute("style", "display:block;");
navegation.classList.add("hide");
}

</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstudaVagão</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
    
    <body> 
    <header>
        <div class="navbar">
            <nav class="navegation hide" id="navegation">
                <ul class="nav-list">
                    <span class="close-icon" onclick="showIconBar()"><i class="fa fa-close"></i></span>
<li class="nav-item">
    <a href="sistema.php">Home</a>
</li>
<li class="nav-item">
    <a href="provas.html">Provas e questionários</a>
</li>


                </ul>
            </nav>
            <a href="#" class="bar-icon" id="iconBar" onclick= "hideIconBar()"><i class="fa fa-bars"></i></a>
        <div class="brand">EstudaVagão</div>
        </div>
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="everything">Tudo</option>
                    <option value="titles">Títulos</option>
                    <option value="descriptions">Descrições</option>
                </select>
                <input type="text" name="q" id="" placeholder="pesquisar...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>
    </header>    


<?php
$servername = "localhost";
$username = "root";
$password = "707594Mic";
$dbname = "danidani606";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

if (isset($_GET['pergunta_id'])) {

    $pergunta_id = $_GET['pergunta_id']; 
    $logado = $_GET['logado']; // Recupere o nome de usuário logado da URL
     
    $sql_pergunta = "SELECT pergunta FROM perguntas WHERE id = $pergunta_id";
    $resultado_pergunta = $conexao->query($sql_pergunta);

    if ($resultado_pergunta) {
        if ($resultado_pergunta->num_rows > 0) {
            $linha_pergunta = $resultado_pergunta->fetch_assoc();
            $pergunta_texto = $linha_pergunta['pergunta'];

            // Exiba o texto da pergunta
            echo "<h1>Pergunta</h1>";
            
            echo "<p>Usuário: $logado</p>";
            echo "<p>$pergunta_texto</p>";
            

            // Consulte o banco de dados para obter as respostas com base em $pergunta_id
            $sql_respostas = "SELECT resposta FROM answers WHERE pergunta_id = $pergunta_id";
            $resultado_respostas = $conexao->query($sql_respostas);

            if ($resultado_respostas) {
                if ($resultado_respostas->num_rows > 0) {
                    echo "<h2>Respostas</h2>";
                    while ($linha_resposta = $resultado_respostas->fetch_assoc()) {
                        $resposta_texto = $linha_resposta['resposta'];
                        echo "<p>Usuário: $logado</p>";
                        echo "<p>$resposta_texto</p>";
                        echo "<br>";
                    }
                } else {
                    echo "Nenhuma resposta encontrada para esta pergunta.";
                }
            } else {
                echo "Erro na consulta SQL de respostas: " . $conexao->error;
            }
            echo '<h2>Responda à pergunta</h2>';
            echo '<form method="post" action="prcresposta.php">';
            echo '<input type="hidden" name="pergunta_id" value="' . $pergunta_id . '">';
            echo '<input type="hidden" name="logado" value="' . $logado . '">';
            echo '<textarea name="resposta" rows="4" cols="50" required></textarea><br>';
            echo '<input type="submit" value="Responder">';
            echo '</form>';
        } else {
            echo "Pergunta não encontrada. ID da pergunta: $pergunta_id";
        }
    } else {
        echo "Erro na consulta SQL de pergunta: " . $conexao->error;
    }
} else {
    echo "ID da pergunta não especificado.";
}

$conexao->close();
?>


 

    

    <footer>
        <span>&copy;&nbsp;CMSM | Todos os direitos reservados</span>
    </footer>
</body>
</html>
