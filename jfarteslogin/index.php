<?php
  if(!empty($_SESSION['login']))
  {
    header('Location:./home.php');
  }
  if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location: ./index.php');
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <section>
        <nav>
            <a href="index.html">
                <img src="imagens/JR GRaf.png" alt="">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="landing.php">HOME</a></li>
                    <li><a href="">PRODUTOS</a></li>
                    <li><a href="">SOBRE</a></li>
                    <li><a href="">FALE CONOSCO</a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
        </nav>
        <div class = "container"> 
            <div class="box">
                <form action="./processLogin.php" method="post">
                    <h1>Faça login</h1>
                    <input type="text" name="login" placeholder="Digite seu user" class="input"><br> <br>
                    <input type="password" name="senha" id="" placeholder="Digite sua senha" class="input"> <br> <br>
                    <input type="submit" value="enviar" name = "acao" class = "submit">
                    <p>Não tem uma conta? <a href="cadastro.php">cadastre-se</a></p>
                </form>
            </div>
        </div>
    </section>

    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>

<!--<h1>Login</h1>
<form method = "post" action="./processLogin.php">
    <input type="text" name="login">
    <input type="password" name="senha">
    <input type="submit" value="enviar" name = "acao">
    <a href="cadastro.php">cadastro</a>
</form>-->