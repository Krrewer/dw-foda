<?php
require_once ('../M/preferencias.php');
session_start();

if (!isset($_SESSION['pref'])){
    header('Location: index.php');
    exit();
}

$prefs = $_SESSION['pref'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Olá <?php echo ($prefs->nome);?></h2>
    <br>
    <?php
    if ($prefs->publicidade === 'y'){
        print "<div><p>Compre já!</p> <p>Apostila PHP</p> </div>";
    }
    ?>
    <br>
    <footer>
        Bem vindo ao IFMS
    </footer>
</body>
</html>