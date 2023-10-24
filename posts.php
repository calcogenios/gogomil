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
        <span><a href="sistema.php">EstudaVagão - Fóruns</a> >> <a href="#">Química</a></span>
    </div>
    
<?php
$servername = "localhost";
$username = "root";
$password = "707594Mic";
$dbname = "danidani606";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}$categoria_id = 1;

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
    <div class="container">
    <div class="post-table">
        <div class="table-head">
            <div class="status">Status</div>
            <div class="subject">Assunto</div>
            <div class="replies">Respostas/Visualizações</div>
            <div class="last-reply">Última Resposta</div>
        </div>
    
<div class="table-row">
<div class="status"><i class="fa fa-rocket"></i></div>
<div class="subject"><a href="#">Qual o elemento mais eletronegativo?</a>
<br>
<span>Por <b><a href="#">João</a></b></span>
    </div>
<div class="replies">
    2 respostas <br> 53 visualizações
</div>
<div class="last-reply">02 Ago 2023 <br> Por <b><a href="#">Gabi59</a></b></div>
</div> 

<div class="table-row">
    <div class="status"><i class="fa-solid fa-face-sad-cry"></i></i></div>
    <div class="subject"><a href="#">Qual o elemento menos eletronegativo?</a>
    <br>
    <span>Por <b><a href="#">João</a></b></span>
        </div>
    <div class="replies">
        0 respostas <br> 0 visualizações
    </div>
    <div class="last-reply">02 Ago 2023 <br> Por <b><a href="#">Gabi59</a></b></div>
    </div>


    <div class="table-row">
        <div class="status"><i class="fa fa-fire"></i></div>
        <div class="subject"><a href="#">Explique a dualidade onde partícula</a>
        <br>
        <span>Por <b><a href="#">João</a></b></span>
            </div>
        <div class="replies">
            2 respostas <br> 53 visualizações
        </div>
        <div class="last-reply">02 Ago 2023 <br> Por <b><a href="#">Gabi59</a></b></div>
        </div>


        <div class="table-row">
            <div class="status"><i class="fa fa-fire"></i></div>
            <div class="subject"><a href="detalhes.html">Como é uma ligação dativa?</a>
            <br>
            <span>Por <b><a href="#">beatriz8</a></b></span>
                </div>
            <div class="replies">
                1 respostas <br> 123 visualizações
            </div>
            <div class="last-reply">02 Ago 2023 <br> Por <b><a href="#">Luis88</a></b></div>
            </div>



                <div class="table-row">
                    <div class="status"><i class="fa fa-fire"></i></div>
                    <div class="subject"><a href="#">Qual o modelo atômico da bola de bilhar?</a>
                    <br>
                    <span>Por <b><a href="#">João</a></b></span>
                        </div>
                    <div class="replies">
                        5 respostas <br> 78 visualizações
                    </div>
                    <div class="last-reply">02 Ago 2023 <br> Por <b><a href="#">Gabi59</a></b></div>
                    </div> </div> 

                    <div class="table-row">
                        <div class="status"><i class="fa fa-book"></i></div>
                        <div class="subject"><a href="#">Como determinar um spin?</a>
                        <br>
                        <span>Por <b><a href="#">João</a></b></span>
                            </div>
                        <div class="replies">
                            2 respostas <br> 53 visualizações
                        </div>
                        <div class="last-reply">02 Ago 2023 <br> Por <b><a href="#">Gabi59</a></b></div>
                        </div> 

            <!-- paginaçao -->

           <div class="pagination">
            pages: <a href="#">1</a><a href="#">2</a><a href="#">3</a>
           </div> 

<div class="note">
<span><i class="fa fa-face-sad-cry"></i>&nbsp; 0 engajamento </span> <br>
<span><i class="fa fa-book"></i>&nbsp; engajamento baixo</span> <br>
<span><i class="fa fa-fire"></i>&nbsp; tópico popular </span> <br>
<span><i class="fa fa-rocket"></i>&nbsp; engajamento alto </span> <br>
</div>

    <footer>
        <span>&copy;&nbsp;CMSM | Todos os direitos reservados</span>
    </footer>
</body>
</html>
