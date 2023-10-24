<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION ['nome'])== true) and (!isset($_SESSION ['senha'])==false))
{
    unset ($_SESSION['nome']);
    unset ($_SESSION['senha']);
    header('Location: index');
}
$logado = $_SESSION['nome'];
echo "Bem-vindo, $logado!";


?>
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

<li class="nav-item">
    <a href="leaderboard.html">Leaderboard</a>
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
    
     <div class="container">
        <div class="subforum">
            <div class="subforum-title">
            <h1>Matérias</h1>
            </div>
        
        <div class="subforum-row">
            <div class="subforum-icon center subforum-column">
            <i class="fas fa-comment"></i>
            </div>
            <div class="subforum-description subforum-column">
                <h1><a href="postsM.php">Matemática</a></h1>
                <p>Tire suas dúvidas sobre a disciplina</p>
              </div>
              <div class="subforum-status center subforum-column">
                <span>13 posts  |  15 tópicos</span>
              </div>
              <div class="subforum-info  subforum-column">
                <b><a href="">Última postagem</a></b> por <a href="">Usuario24</a>
                <br>
                em <small>29 Jun 2023</small> 
              </div>
            </div>
        </div>
<hr class="subforum-divider">


        <div class="subforum-row">
            <div class="subforum-icon center subforum-column">
            <i class="fas fa-comment"></i>
            </div>
            <div class="subforum-description subforum-column">
                <h1><a href="postsF.php">Física</a></h1>
                <p>Tire suas dúvidas sobre a disciplina</p>
              </div>
              <div class="subforum-status center subforum-column">
                <span>13 posts  |  15 tópicos</span>
              </div>
              <div class="subforum-info  subforum-column">
                <b><a href="">Última postagem</a></b> por <a href="">Usuario24</a>
                <br>
                em <small>29 Jun 2023</small> 
              </div>
            </div>

            <hr class="subforum-divider">

        
        <div class="subforum-row">
            <div class="subforum-icon center subforum-column">
            <i class="fas fa-comment"></i>
            </div>
            <div class="subforum-description subforum-column">
                <h1><a href="posts.php">Química</a></h1>
                <p>Tire suas dúvidas sobre a disciplina</p>
              </div>
              <div class="subforum-status center subforum-column">
                <span>13 posts  |  15 tópicos</span>
              </div>
              <div class="subforum-info  subforum-column">
                <b><a href="">Última postagem</a></b> por <a href="">Usuario24</a>
                <br>
                em <small>29 Jun 2023</small> 
              </div>
            </div>
            <hr class="subforum-divider">


         
        <div class="subforum-row">
            <div class="subforum-icon center subforum-column">
            <i class="fas fa-comment"></i>
            </div>
            <div class="subforum-description subforum-column">
                <h1><a href="postsFL.php">Filosofia</a></h1>
                <p>Tire suas dúvidas sobre a disciplina</p>
              </div>
              <div class="subforum-status center subforum-column">
                <span>13 posts  |  15 tópicos</span>
              </div>
              <div class="subforum-info  subforum-column">
                <b><a href="">Última postagem</a></b> por <a href="">Usuario24</a>
                <br>
                em <small>29 Jun 2023</small> 
              </div>
            </div>
        
            <hr class="subforum-divider">



        <div class="subforum-row">
            <div class="subforum-icon center subforum-column">
            <i class="fas fa-comment"></i>
            </div>
            <div class="subforum-description subforum-column">
                <h1><a href="postsP.php">Português</a></h1>
                <p>Tire suas dúvidas sobre a disciplina</p>
              </div>
              <div class="subforum-status center subforum-column">
                <span>13 posts  |  15 tópicos</span>
              </div>
              <div class="subforum-info  subforum-column">
                <b><a href="">Última postagem</a></b> por <a href="">Usuario24</a>
                <br>
                em <small>29 Jun 2023</small> 
              </div>
            </div>
            <hr class="subforum-divider">



            <div class="subforum-row">
            <div class="subforum-icon center subforum-column">
            <i class="fas fa-comment"></i>
            </div>
            <div class="subforum-description subforum-column">
                <h1><a href="postsG.php">Geografia</a></h1>
                <p>Tire suas dúvidas sobre a disciplina</p>
              </div>
              <div class="subforum-status center subforum-column">
                <span>13 posts  |  15 tópicos</span>
              </div>
              <div class="subforum-info  subforum-column">
                <b><a href="">Última postagem</a></b> por <a href="">Usuario24</a>
                <br>
                em <small>29 Jun 2023</small> 
              </div>
            </div>
            <hr class="subforum-divider">



            <div class="subforum-row">
            <div class="subforum-icon center subforum-column">
            <i class="fas fa-comment"></i>
            </div>
            <div class="subforum-description subforum-column">
                <h1><a href="postsH.php">História</a></h1>
                <p>Tire suas dúvidas sobre a disciplina</p>
              </div>
              <div class="subforum-status center subforum-column">
                <span>13 posts  |  15 tópicos</span>
              </div>
              <div class="subforum-info  subforum-column">
                <b><a href="">Última postagem</a></b> por <a href="">Usuario24</a>
                <br>
                em <small>29 Jun 2023</small> 
              </div>
            </div>
     </div>  
     

<h1>Fórum de Perguntas e Respostas</h1>
    
    <h2>Faça uma pergunta:</h2>
    <form method="post" action="prcpergunta.php"> 
      
        <textarea name="pergunta" rows="4" cols="50" required></textarea><br> 
       <input type="hidden" name="logado" value="<?php echo $logado; ?>">
        <input type="submit" value="Enviar Pergunta">
        <label for="categoria">Matéria:</label>
<select name="categoria" id="categoria" required>
    <option value="1">Química</option>
    <option value="5">Matemática</option>
    <option value="4">Português</option>
    <option value="7">Filosofia</option>
    <option value="2">Física</option>
    <option value="6">Geografia</option>
    <option value="3">História</option>
    <!-- Adicione mais categorias conforme necessário -->
</select><br>

       
       
    </form>
<?php 
$servername = "localhost";
$username = "root";
$password = "707594Mic";
$dbname = "danidani606";

$conexao = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT perguntas.id AS pergunta_id, perguntas.pergunta, categorias.nome_categoria
FROM perguntas
INNER JOIN categorias ON perguntas.categoria_id = categorias.id_categoria";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
  
    // Exibe as perguntas
    while ($linha = $resultado->fetch_assoc()) {
       
       echo  $linha["nome_categoria"], " - ";
       echo $logado . ": " . $linha["pergunta"] , "  ", "  ", "  "; 
       
        
      echo '<a href="pagina_resposta.php?pergunta_id=' . $linha["pergunta_id"] . '&logado=' . $logado . ' '. $linha["nome_categoria"] . '">Responder</a>', "<br>", "<br>";
        
       }
      }
 else {
    echo "Nenhuma pergunta encontrada.";
}

$conexao->close();?>

<br> <br>

    <div class="forum-info">
<div class="chart">
    EstudaVagão - Status &nbsp; <i class="fa fa-bar-chart"></i>
</div>











<div>
<span><u>345</u> posts em <u>45</u> tópicos por <u>325</u> usuários</span><br>
<span>Última postagem: <b><a href="#">O que é ligação dipolo-dipolo?</a> em 01 Ago 2023 por <a href="#">Julia55</a></span>
</div>
    </div>
    <footer>
        <span>&copy;&nbsp;CMSM | Todos os direitos reservados</span>
    </footer>
</body>
</html>




