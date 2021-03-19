<html>
    <?php
        session_start();
        if(isset($_POST["submit"])){
            if($_POST["username"] === $_SESSION["username"] && $_POST["password"] === $_SESSION["password"]){
                echo "Connexion validée. Bienvenue ".$_POST["username"]."<br>";
                echo "Redirection vers l'espace membre.";
                $_SESSION["logged"] = true;
                header("Location:espace_membre.php");
            }
            else{
                echo "Combinaison invalide.";
            }
        }
        else{
            echo ' <h1 style="color:red">ERREUR !!  <h1> ';
        }
    ?>
</html>