<?php
session_start();
if(!empty($_POST['usercad'] && $_POST['senhacad'])){
    $usuario = $_POST['usercad'];
    $senha = $_POST['senhacad'];

    $_SESSION['login'] = $usuario;
    $_SESSION['senha'] = $senha;

    if(!empty($_SESSION['login'])){
        header('Location:index.php');
    }
    if(isset($_GET['logout'])){
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        session_destroy();
        header('Location: ./index.php');
    }
}
?>