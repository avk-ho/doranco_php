<html>
    <?php
        session_start();
        if(isset($_SESSION["logged"])){
            if($_SESSION["logged"]){
                echo "Bienvenue dans l'espace utilisateur. Voici vos informations :<br>";
                echo "Nom d'utilisateur : ".$_SESSION["username"]."<br>";
                echo "Age : ".$_SESSION["age"]."<br>";
                echo '<button onclick="window.location.href=\'deconnexion.php\'">Deconnexion</button>';
            }
        }        
        else{
            echo "Vous n'êtes pas connecté, veuillez vous connecter.";
        }
    ?>
</html>