<?php

//on lance le session_start() avant tout affichage html (contenu)
//pour eviter l'erreur (header already sent)
//lacement de session, creaction de  l'id de session
//côté utilisateurun cookie (est un petit fichier qui est stocké sur le poste de l'internaute) est cree, il contient uniquement la clef de session 
//ce cookie expire dans 30 jours
//côté serveur, in fichier texte est cree avec la clef de session en tant que nom de fichier, et une valeur (ici un timestamp)

session_start();

//la session est vide au début de la connexion serveur/client
//var_dump($_SESSION);

//affichage de l'id session  (PHPSESSID)
//echo session_id();

// création d'une variable de session en utulisant la variable globale $_SESSION qui est de type array
//$_SESSION['laDate'] = date("Y-m-d H:i:s");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        nav ul li{
            display:inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Bienvenue sur la page d'accueil</h1>
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
