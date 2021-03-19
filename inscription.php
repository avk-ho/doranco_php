<?php
    session_start();
?>
<h1>Inscription</h1>
    <form action="register.php" method="post">
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" id="age" name="age">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <div  id="submit">
            <input type="submit" value="Envoyer" name="submit">
        </div>
    </form>
    