<?php 
session_start();
if(empty($_SESSION['login']))
{
  header('Location:./index.php');
}

if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location:./landing.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior Ferreira - Gráfica Online</title>
    <link rel="stylesheet" href="slyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Oswald:wght@200 & display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Poppins:wght@600 & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Raleway:wght@700 & display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
</head>
<body>
    <!--header-->
    <section class="header">
       <nav>
            <a href="index.html">
                <img src="imagens/JR GRaf.png" alt="">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">PRODUTOS</a></li>
                    <li><a href="">SOBRE</a></li>
                    <li><a href="">FALE CONOSCO</a></li>
                    <li><a href="">VER PERFIL</a>
                
                        <div class="perfil">
                            <ul>
                                <li><img src="./imagens/kisspng-user-profile-computer-icons-login-user-avatars-5b0d9431e004b5.1250351715276165619176.png" alt=""></li>
                                <li>meus dados</li>
                                <li>carrinho</li>
                                <li>pedidos finalizados</li>
                                <li><input type="submit" value="sair" name="sair"></li>
                            </ul>
                        </div>

                    </li>
                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
       </nav> 
       <div class="text-box">
            <h1>Sua Gráfica On-line</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, harum expedita. Neque nesciunt, error tempore quaerat tenetur</p>

        </div>
    </section>

    <!--produtos-->
    <section class="product">
        <h2 class="product-category">Nossos produtos</h2>
        <button class="pre-btn"><img src="imagens/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="imagens/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/adesivosnew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/backdropnew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">backdrops</h2>
                    <p class="short-description">1 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/bannernew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Banner</h2>
                    <p class="short-description">1 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/blocosnew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">blocos</h2>
                    <p class="short-description">1 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/cartaznew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/cartão_de_visitanew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/certificadonew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/foldernew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/logonew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/panfletosnew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="imagens/recibos_e_comandasnew.jpg" alt="" class="product-thumb">
                    <button class="card-btn"> adicionar ao carrinho</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Adesivos</h2>
                    <p class="short-description">50 un</p>
                    <span class="actual-price">R&#36;40,00</span>
                </div>
            </div>
        </div>
    </section>

    <script src="scipt.js"></script>
    <!--footer-->

    <section class="footer">
        <h4>Sobre nós</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ad, <br> assumenda ipsum corrupti sed officia ea ullam quod rerum dolor ducimus ipsa eligendi voluptatum.</p>
        <div class="icon">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    </section>

    <!--Java-->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

    <?php
    echo ' para sair clique em ';
    echo '<a href= "?logout"   style = text-decoration:none; style = color: black;> Encerrar sessão</a>';
    ?>
</body>
</html>