<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body,html{
            margin-top: 200px;
            background: black;
            background-image: url("img/loginlogo.png");
            background-size: cover; /* esto hace que la imagen de fondo cubra toda la pantalla */
            background-repeat: no-repeat; /* esto evita que la imagen se repita */
            background-position: center; /* esto centra la imagen en la pantalla */
            font-family:'Roboto',sans-serif;
        }
        
        form{
            width:20%;
            height:20%;
            padding: 20px;
            background: white;
            margin:auto;
            margin-top: 15%;
            border:2px solid black; 
            border-radius:10px;
            box-shadow: 0px 10px 30px black;
            text-align:center;
        }
        input{
            width: 80%;
            text-align:center;
            margin: auto;
            padding: 10px;
            margin: 10px;
        }
        h1{
            width:20%;
            height:20%;
            padding: 20px;
            margin:auto;
            text-align:center;
        }
        img{
            width:100%;
            height:100%;
        }
    </style>

    <title>Log in</title>
</head>
<body>
    <form method="POST" action="login.php">
        <input type="text" name="usuario" placeholder="Usuario">      
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="Enviar">
</form>

<footer>© 2023 - Gonzalo Aguirre Boix </footer>
</body>
</html>