<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <style>
        nav ul li{
            display:inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Bienvenue</h1>
    <?php
    if(isset($_SESSION['name'])):
    ?>
    <h1>Bonjour <?= $_SESSION['name']?></h1>
    
    <?php
    endif;
    include "menu.inc.php";
    ?>
</body>
</html>
