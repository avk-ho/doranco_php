<html>
    <?php
        session_start();
        if(isset($_POST["submit"])){
            try{
	            $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
            }
            catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
            $reponse = $bdd->query('SELECT * FROM users');
            while ($donnees = $reponse->fetch()){
                if($_POST["username"] === $donnees["username"] && $_POST["password"] === $donnees["password"]){
                    echo "Connexion validée. Bienvenue ".$_POST["username"]."<br>";
                    echo "Redirection vers l'espace membre.";
                    $_SESSION["logged"] = true;
                    header("Location:espace_membre.php");
                }
                else{
                    echo "Combinaison invalide.";
                }
            }
            $reponse->closeCursor();
        }
        else{
            echo ' <h1 style="color:red">ERREUR !!  <h1> ';
        }
    ?>
</html>