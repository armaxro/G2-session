<?php


session_start();
// on verifie si nous ne sommes pas connectés
if(!isset($_SESSION['monID']) || $_SESSION['monID'] !== session_id())
{
    header("Location: connection.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <style>
        nav ul li{
            display:inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Bienvenue </h1>
    <h2>Bienvenue <?=$_SESSION['name']?></h2>
    <?php
    include "menu.inc.php";
    ?>
    <p>
</body>
</html>
