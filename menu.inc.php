<nav>
        <ul>
            <li><a href="homepage.php">Accueil</a></li>
            <li><a href="info.php">Information</a></li>
            <li><a href="photos.php">Photos</a></li>
        <?php
        if(isset($_SESSION['monID'])&&
        $_SESSION['monID'] == session_id()):
            ?>
            <li><a href="admin.php">Administration</a></li>
            <li><a href="disconnect.php">Disconnect</a></li>
            <?php
            //si non connecté
        else:
            ?>
            <li><a href="connection.php">Se connecter</a></li>
            <?php
        endif;
        ?>
        </ul>
</nav>