<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | EstudaVagão</title>
    <style>
        body{
         font-family: Arial, Helvetica, sans-serif;      
         background-image: url("https://media.licdn.com/dms/image/C4D12AQFJnN-ghUTDEw/article-cover_image-shrink_600_2000/0/1520059108550?e=2147483647&v=beta&t=ksD8IevNAPdAQCZ77eI7RZJ6uKA3JSZFYfaK8xRXQY0");
         background-repeat: no-repeat;
         background-size:cover; 
        }
        div {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input {
            padding: 20px;
            border: none;
            outline: none;
        }
        .inputSubmit {
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1> Estuda Vagão</h1>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
             <input type="text" name="nome" placeholder="Nome do usuário">
            <br> <br>
            <input type="password" name="senha" placeholder="Senha">
            <br> <br>
            <input type="submit" name="submit" value="Enviar" class="inputSubmit">
            <br> <br>
        Não tem login? <a href="cadastro.php"> Cadastre-se!</a>
        </form>
    </div>
</body>
</html>