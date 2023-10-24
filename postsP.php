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

    <!--navegaçao-->
    <div class="navegate">
        <span><a href="sistema.php">EstudaVagão - Fóruns</a> >> <a href="#">Português</a></span>
    </div>
    
<?php
$servername = "localhost";
$username = "root";
$password = "707594Mic";
$dbname = "danidani606";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}$categoria_id = 4;

 // Categoria Química (você pode obter isso a partir da URL)
 $sql = "SELECT * FROM perguntas WHERE categoria_id = $categoria_id";
 $resultado = $conexao->query($sql);
 
 if ($resultado->num_rows > 0) {
     // Exiba as perguntas
     while ($linha = $resultado->fetch_assoc()) {
         echo "Pergunta: " . $linha["pergunta"] . "<br>";
     }
 } else {
     echo "Nenhuma pergunta encontrada para esta categoria.";
 }
 
 ?>
    

    <footer>
        <span>&copy;&nbsp;CMSM | Todos os direitos reservados</span>
    </footer>
</body>
</html>
