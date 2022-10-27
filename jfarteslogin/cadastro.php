<?php
  session_start();
  

  if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location:./landing.php');
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
    <title>Cadastro</title>
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
                <form action="./process.php" method="post">
                    <h1>Cadastre-se!</h1>
                    <input type="text" name="usercad" placeholder="Defina um user" class="input"><br> <br>
                    <input type="password" name="senhacad" id="" placeholder="Defina uma senha" class="input"> <br> <br>
                    <input type="submit" name = "cad" value="cadastrar" class = "submit">
                    <!--<p>Não tem uma conta? <a href="cadastro.php">cadastre-se</a></p>-->
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



<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
        *{
            margin:0;
            padding: 0;
        }
        body{
            text-aling: center;
            background: blue;
        }
        div{
            display: flex;
            flex-direction: column;
            width: 100vw;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        body div form{
            display: flex;
            flex-direction: column;
            width: 50%;
        }
    </style> 
    <title>Login</title>
</head>
<body>
    <div>
    <form method="Post" action = "./process.php">
        <input type="text" name="usercad" placeholder = "defina um usuário">
        <input type="password" name="senhacad" placeholder= "defina uma senha">
        <input type="submit" name = "cad" value="cadastrar">
    </form>
    </div>
    
</body>
</html>-->