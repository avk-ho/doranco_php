<html>
    <?php
        session_start();
        function hidePW($str){
            $pw = "";
            for($i = 0; $i < strlen($str); $i++){
                if($i==0){
                    $pw = substr($str, $i, 1);
                }
                $pw .= "*";
            }
            return $pw;
        }
        if(isset($_POST["submit"])){
            try{
	            $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
            }
            catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
            }
            $sql = "INSERT INTO users (username, password) VALUES ('".$_POST["username"]."','".$_POST["password"]."')";
            $bdd->query($sql);
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["age"] = $_POST["age"];

            echo "L'utilisateur ayant ces informations a bien été crée.<br>";
            echo "Nom d'utilisateur : ".$_POST["username"]."<br>";
            echo "Age : ".$_POST["age"]."<br>";
            echo "Mot de passe : ".hidePW($_POST["password"])."<br>";
            echo '<a href="connexion.php">Se connecter</a>';
        }
        else{
            echo ' <h1 style="color:red">ERREUR !!  <h1> ';
        }
    ?>
</html>

