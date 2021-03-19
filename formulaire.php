// Exemple fourni par Nadir
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>


    <?php
    if (isset($_POST["submit"])) {

        echo "<p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>";
        echo 'Prénom : ' . $_POST["prenom"] . '<br>';
        echo 'Email : ' . $_POST["mail"] . '<br>';
        echo 'Age : ' . $_POST["age"] . '<br>';
        echo 'Sexe : ' . $_POST["sexe"] . '<br>';
    } else {
        echo ' <h1 style="color:red">ERREUR !!  <h1> ';
    }
    ?>
</body>

</html>