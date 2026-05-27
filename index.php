<?php
    session_start();
    if (isset($_SESSION["pref"])) {
        header('Location: V/principal.php');
    } else {
        header('Location: /index.php');
    }
?>