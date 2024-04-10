<?php

session_start();

//si nous sommes deja connectes
if(isset($_SESSION['monID'])&&
$_SESSION['monID']=== session_id())
{
    header("location: homepage.php");
    exit();
}

//login et mot de passe de l'administrateur
$user = "admin";
$pwd = "root";

// si on essaye de se connecter
if(isset($_POST['login'],$_POST['password']))
{
    //on verifie le login et password
    if ($_POST['login'] === $user && $_POST['password'] === $pwd);{
        //on cree une session
        $_SESSION['monID'] = session_id();
        $_SESSION['name'] = $user;
        header("location: admin.php");
    }
}else{
    $erreur = "Login ou password incorrectes";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <style>
        nav ul li{
            display:inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Connexion</h1>
    <?php
    include "menu.inc.php";
    ?>
    <p>Veuillez vous connecter</p>
    <?php 
        if(isset($erreur)) echo "<h3>$erreur</h3>"
     ?>

    <form action="" name="connexion" method="POST">
        <input type="text" name="login" placeholder="username" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
    <p>Utilisez "admin" et "root"</p>
    <?php
    var_dump($_POST, $_SESSION);
    ?>
</body>
</html>
