<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit']))
{
    //print_r('Nome:  ' . $_POST['nome']);
    //print_r(('<br>'));
    //print_r('Email:  ' . $_POST['email']);
    //print_r(('<br>'));
    //print_r('Senha:  ' . $_POST['senha']);
    //print_r(('<br>'));
    //print_r('Role:  ' . $_POST['role']);

    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $role = $_POST['role'];

    $result = mysqli_query($conexao, "INSERT INTO new_table(nome, email, senha, role) 
    VALUES ('$nome', '$email', '$senha', '$role')");
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        body {
font-family: Arial, Helvetica, sans-serif;
background-image: linear-gradient(to left, rgb(10, 150, 200), rgb(17, 54, 71));
        }
        .box {
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 5%;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid rgb(70, 149, 219);
        }
        legend{
            border: 1px solid rgb(70, 149, 219);
            padding: 10px;
            text-align: center;
            background-color: rgb(70, 149, 219);
            border-radius: 5px;
        }
        .inputCAIXA {
position: relative;
        }
        .inputUser {
            background: none;
            border: none;
            outline: none;
            border-bottom: 1px solid white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            color: white;
        }
        .neneco {
            position:absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .neneco, .inputUser:valid ~ .neneco{
            top: -20px;
            font-size: 12px;
            color: rgb(70, 149, 219);
        }
        #submit {
            background-image: linear-gradient(to right, rgb(70,149,219),rgb(40,70,110));
            width: 100%;
            border: none;
            padding: 15px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            color: white;
        }
        #submit:hover {
            background-image: linear-gradient(to right, rgb(140,250,250),rgb(80,140,220));
        }
        
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputCAIXA">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="neneco">Nome do usuário</label>
                </div>
                <br><br>
                <div class="inputCAIXA">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="neneco">Email</label>
                </div>
                <br><br>
                <div class="inputCAIXA">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="neneco">Senha</label>
                </div>
                <br><br>
                <input type="radio" id="professor" name="role" value="professor" required>
                <label for="professor">Professor e Aluno-Tutor</label>
                <input type="radio" id="aluno" name="role" value="aluno" required>
                <label for="aluno">Aluno</label>
                <br> <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>

        </form>
    </div>
</body>
</html>