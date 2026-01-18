<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#login.css">
    <title>Login Telecall</title>
    <style>
        
html, body {
    width: 100%;
    height: 100%;
    margin: 0;
}
body {
    font-family: Arial, Helvetica, sans-serif;
    min-height: 100vh;
    background-image: url("/aula/teste/imagens/telafundo.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
}
.inputlogin {
    width: 100%;
    padding: 12px;
    font-size: 15px;
    box-sizing: border-box;
    border-radius: 10px;
}
h1{
    text-align: center;
}
a{
    text-align: center;
    color: aliceblue;
}
div{
    background-color: rgba(0, 0, 0, 0.6);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: #fff;
}
input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
}
.inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    
}
.inputSubmit:hover{
    background-color: deepskyblue;
    cursor: pointer;
}
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input class="inputlogin" type="text" name="usuario" placeholder="Usuario">
            <br><br>
            <input class="inputlogin" type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        <p>Ainda não se cadastrou?<a href="formulario.php">Cadastrar-se</a></p>
    </div>
</body>
</html>