<?php
ini_set("display_errors", 1);
session_start();
require_once('../M/preferencias.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $publicidade = $_POST['publicidade'];
    $obj = new Preferencia($nome, $idade, $publicidade);
    $_SESSION['pref'] = $obj;

    if ($idade < 18){
        header('Location: ../V/negado.php');
        exit();
    } else {
        header('Location: ../V/principal.php');
        exit();
    }
}
?>