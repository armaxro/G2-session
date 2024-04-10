<?php

session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <style>
        nav ul li{
            display:inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Bienvenue
    </h1>
    <?php
    include "menu.inc.php";
    ?>
    <p>Photos</p>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLPOAEFKwwBnkqPSkXWGyqD-VeCVyXrJ95FQ&s" alt="photo">
</body>
</html>
