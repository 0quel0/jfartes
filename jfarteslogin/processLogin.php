<?php
session_start();


if($_POST['login'] == $_SESSION['login'] && $_POST['senha'] == $_SESSION['senha']){
    header('Location:./home.php');
}
if(isset($_GET['logout'])){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
    header('Location:./landing.php');
}
?>