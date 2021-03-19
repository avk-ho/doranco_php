// Exemple fourni par Nadir
<h1>Formulaire HTML</h1>
        <form action="formulaire.php" method="post">
            <div class="">
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
            <div >
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
            <div class="">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div  id="submit">
                <input type="submit" value="Envoyer" name="submit">
            </div>
        </form>
        