<html>
    <?php
        session_start();
        $_SESSION["logged"] = false;
        if(!$_SESSION["logged"]){
            echo "Vous avez été déconnecté avec succès.<br>";
            echo '<a href="connexion.php">Se connecter</a>';
            //header("Location:connexion.php");
        }
        else{
            echo "Erreur ???";
        };
    ?>
</html>