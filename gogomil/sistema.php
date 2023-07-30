<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION ['nome'])== true) and (!isset($_SESSION ['senha'])==false))
{
    unset ($_SESSION['nome']);
    unset ($_SESSION['senha']);
    header('Location: estudavagao');
}
$logado = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstudaVagão</title>
    <style>
        body {
font-family: Arial, Helvetica, sans-serif;
background-image: linear-gradient(to left, rgb(250, 250, 250), rgb(250, 250, 250));
        }
        *{margin: 0;
        padding: 0;
        box-sizing: border-box;}
        .container >h2{
            background-color: #ccc;
            padding: 10px 0;
        }
        .thread{
            padding:10px;
            border: 1px dashed #ccc;
        }
        .respostas{
            margin: 0 10px;
        }
        .respostas p{
            font-size: 18px;
            color: #333;
        }
        textarea{
            width: 100%;
            height: 40px;
            border: 1px solid #ccc;
        }
    </style> 
</head>
   
<body>
    <div class="container">
    <h2>EstudaVagão</h2>
    <div class="thread">
    <h2>Qual é o Arkhé de Tales de Mileto? <button>Mostrar respostas</h2>
    <div style="display:none;" class="respostas">
    <p>vo saber</p>
    <hr>
    <p>Era a água</p>
    <hr>
    <p>água</p>
    <hr>
    <form>
        <textarea></textarea>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</div>
</div>
    </div>

    <div class="thread">
    <h2>Qual é o Arkhé de Tales de Mileto? <button>Mostrar respostas</h2>
    <div style="display:none;" class="respostas">
    <p>vo saber</p>
    <hr>
    <p>Era a água</p>
    <hr>
    <p>água</p>
    <hr>
    <form>
        <textarea></textarea>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</div>
</div>
    </div>

    <div class="thread">
    <h2>Qual é o Arkhé de Tales de Mileto? <button>Mostrar respostas</h2>
    <div style="display:none;" class="respostas">
    <p>vo saber</p>
    <hr>
    <p>Era a água</p>
    <hr>
    <p>água</p>
    <hr>
    <form>
        <textarea></textarea>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</div>
</div>
    </div>


    <script>
        let buttonsResposta = document.querySelectorAll('.thread button');

        for(let i = 0; i< buttonsResposta.length; i++) {
            buttonsResposta[i].addEventListener('click', ()=>{
                let respostas = document.querySelectorAll('.respostas');
                respostas[i].style.display ="block";
            })
        }
        let forms = document.querySelectorAll('form');
        for(let i = 0; i < forms.length; i++){
            forms[i].addEventListener('submit', (e)=>{
                e.preventDefault();
                let conteudo = document.querySelectorAll('textarea')[i];
                forms[i].insertAdjacentHTML('beforebegin','<p>'+conteudo.value+'</p>')
                conteudo = "";
            })
        }
        </script>
</body>
</html>