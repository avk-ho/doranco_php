<?php
    echo "Il n'y a personne qui n'aime la souffrance pour <br>
    elle-même, qui ne la recherche et qui ne la <br>
    veuille pour elle-même...";

    //$prenom = "PHP";
    //$age = 100;
    //echo "<br>Nom : $prenom
    //<br>Age : $age";

    $prenom = "PHP";
    $age = 100;
    $taille = 1.8;
    echo '<br>Type de $prenom : ';
    echo gettype($prenom);
    echo " // Valeur de \$prenom : $prenom";
    echo '<br>Type de $age : ';
    echo gettype($age);
    echo " // Valeur de \$age : $age";
    echo '<br>Type de $taille : ';
    echo gettype($taille);
    echo " // Valeur de \$taille : $taille<br>";

    echo "<br>Je m'appelle ".$prenom.", j'ai ".$age." ans et je mesure ".$taille."m.<br><br>";

    $longueur = 5;
    $largeur = 3;
    $surfaceRect = $longueur*$largeur;
    $base1 = 7;
    $base2 = 4;
    $hauteur = 4;
    $surfaceTrap = ($base1+$base2)/2*$hauteur;
    $rayon = 4; 
    $pi = 3.14;
    $surfaceCerc = $pi*$rayon**2;
    echo "La surface d'un rectangle de longueur de $longueur et de largeur $largeur est de : $surfaceRect.<br>";
    echo "La surface d'un trapèze de base de $base1, de seconde base $base2 et de hauteur $hauteur est de : $surfaceTrap.<br>";
    echo "La surface d'un cercle de rayon $rayon est de : $surfaceCerc.<br>";

    $a = 50;
    $b = 10;
    if($a>$b){
        echo "<br>Hello World<br><br>";
    }

    $age = 18;
    if($age>=18){
        echo "Bienvenue.<br><br>";
    }
    if($age<18){
        echo "Tu n'as pas le droit d'être ici !<br><br>";
    }

    $inscrit = true;
    if($inscrit == true){
        if($age>=18){
            echo "Utilisateur inscrit et majeur.<br><br>";
        }
        else{
            echo "Utilisateur inscrit et mineur.<br><br>";
        }
    }
    else{
        echo "Utilisateur non-inscrit, accès refusé.<br><br>";
    }

    //version alternative
    // if($inscrit == false){
    //     echo "Utilisateur non-inscrit, accès refusé.<br><br>";
    // }
    // elseif($age>=18){
    //     echo "Utilisateur inscrit et majeur.<br><br>";
    // }
    // else{
    //     echo "Utilisateur inscrit et mineur.<br><br>";
    // }
    $consommation = 100;
    $facture = 0;
    if($consommation <= 50){
        $facture = $consommation*3.50;
    }
    elseif($consommation <= 150){
        $facture = ($consommation-50)*4.00 + 3.50*50;
    }
    elseif($consommation <= 250){
        $facture = ($consommation-150)*5.20 + 100*4.00 + 50*3.50;
    }
    else{
        $facture = ($consommation-250)*6.50 + 100*5.20 + 100*4.00 + 50*3.50;
    }
    echo "\$facture = $facture €<br><br>";

    // Solutions de Léo
    // if(0 <= $consomation and $consomation <= 50){ // Consomation inférieure à 50
    //     $facture = $consomation * 3.5;
    //     echo $facture . '€';
    //   }elseif(51 <= $consomation and $consomation <= 150){  // Consomation inférieure à 150
    //     $facture = (($consomation - 50) * 4) + 175;
    //     echo $facture . '€';
    //   }elseif(151 <= $consomation and $consomation <= 250){ // Consomation inférieure à 250
    //     $facture = (($consomation - 150) * 5.2) + 575;
    //     echo $facture . '€';
    //   }else{  // Consomation supérieure à 250
    //     $facture = (($consomation - 250) * 6.5) + 1095;
    //     echo $facture . '€';
    //   }
    // $consomation = 250;
    //   $facture = 0;
    
    //   if(0 <= $consomation and $consomation <= 50){ // Consomation inférieure à 50
    //     $facture = $consomation * 3.5;
    //   }elseif(51 <= $consomation and $consomation <= 150){  // Consomation inférieure à 150
    //     $facture = (($consomation - 50) * 4) + 175;
    //   }elseif(151 <= $consomation and $consomation <= 250){ // Consomation inférieure à 250
    //     $facture = (($consomation - 150) * 5.2) + 575;
    //   }else{  // Consomation supérieure à 250
    //     $facture = (($consomation - 250) * 6.5) + 1095;
    //   }
    //   echo $facture . '€';
    
    $jour = 29;
    $mois = 2;
    $annee = 2024;
    //Si $mois == 2, 28 jours max sauf année bisextile où 29 jours
    //Année bisextile divisible par 4
    //Années divisibles par 100 ne sont pas bisextiles
    //Années divisibles par 400 sont bisextiles

    // V1 full
    if($jour > 0 && $mois > 0 && $jour <= 31 && $mois <= 12){
        if($mois != 2){
            echo "<br>Date valide.";
        }
        else{
            if($annee%100 == 0 && !($annee%400 == 0) || !($annee%4 == 0)){
                if($jour <= 28){
                    echo "<br>Date valide, année non-bisextile.";
                }
                else{
                    echo "<br>Date invalide.";
                }
            }
            else{
                if($jour <= 29){
                    echo "<br>Date valide, année bisextile.";
                }
                else{
                    echo "<br>Date invalide.";
                }
            }
        }
    }
    else{
        echo "<br>Date invalide.";
    }

    //V2 en deux temps
    $dateValide = false;
    if($jour > 0 && $mois > 0 && $jour <= 31 && $mois <= 12){
        $dateValide = true;
        echo "<br>Premier test passé.";
    }
    else{
        echo "<br>Date invalide.";
    }

    if($dateValide){
        if($mois == 2){
            if($annee%100 == 0 && !($annee%400 == 0) || !($annee%4 == 0)){
                if($jour <= 28){
                    echo "<br>Date valide, année non-bisextile.";
                }
                else{
                    echo "<br>Date invalide.";
                }
            }
            else{
                if($jour <= 29){
                    echo "<br>Date valide, année bisextile.";
                }
                else{
                    echo "<br>Date invalide.";
                }
            }
        }
        else{
            echo "<br>Date valide.";
        }
    }
    echo "<br>";
    echo "<br>";
    //Exemple de loop while (vraiment une loop for)
    $i = 1;
    while($i < 6){
        echo $i;
        $i++;
    }
    echo "<br>";
    $x = 0;
    $y = 0;
    while($y <= 20){
        $x = $y**2 + $x;
        // $x += $y**2; existe
        echo "<br>Itération $y".") Valeur de \$x : $x";
        $y++;
    }

    echo "<br>";

    for($i = 0; $i < 10; $i++){
        echo "<br>".$i;
    }

    echo "<br>";
    echo "<br>";

    $x = 9;
    for($i = 1; $i < 11; $i++){
        echo $x*$i." ";
    }
    echo "<br>";
    for($x = 1; $x < 11; $x++){
        for($i = 1; $i < 11; $i++){
            echo $x*$i." ";
        }
        echo "<br>";
    }
    echo "<br>";
    // Solution de Hayet
    // $i = 1;
    // do {
    // for ($x = 1; $x <= 10 ; $x++) {
    //     echo $x*$i . "<br>";
    // }
    // $i++ ;
    // } while ($i <= 10)

    for($i = 1; $i < 101; $i++){
        echo "$i ";
        if($i%3 == 0){
            echo "Fizz";
        }
        if($i%5 == 0){
            echo "Buzz";
        }
        echo "<br>";
    }

    echo "<br>";

    //Travail sur les fonctions
    function fiftyone_by_26(){
        $x = 51*26;
        echo "$x";
    }
    fiftyone_by_26();

    echo "<br><br>";

    function mult($n1, $n2){
        $x = $n1*$n2;
        echo "$x";
    }
    mult(15, 26);
    echo "<br><br>";

    //V1 compliquée
    // function factoriel($n){
    //     if($n == 0){
    //         echo "1";
    //     }
    //     else{
    //         $x = $n;
    //         for($i = 1; $i < $n; $i++){
    //           $x = $x*($n-$i);
    //         }
    //         echo "$x";
    //     }
    // }
    function factoriel($n){
        if($n == 0){
            echo "1";
            return 1;
        }
        else{
            $x = 1;
            for($i = 1; $i <= $n; $i++){
                $x = $x*$i;
            }
            // echo "$x";
            return $x;
        }
    }
    //méthode avancée, recursion de la fonction
    // function fact($n){
    //     if($n < 2){
    //         return 1;
    //     }
    //     else{
    //         return ($n*fact($n-1));
    //     }
    // }
    factoriel(1);

    echo "<br><br>";

    function switchVar(&$var1, &$var2){
        $x = $var1;
        $var1 = $var2;
        $var2 = $x;
    }

    $x = 1;
    $y = 0;
    echo "Var 1 : $x et Var 2 : $y<br>";
    switchVar($x, $y);
    echo "Var 1 : $x et Var 2 : $y<br>";

    // factoriel p / (factoriel q * factoriel(p - q))
    function coefBinom($a, $b){
        return factoriel($a)/(factoriel($b)*factoriel($a-$b));
    }
    $a = 3;
    $b = 1;
    coefBinom($a, $b);
    function triPasc($x){
        for($i = 1; $i <= $x; $i++){
            
            
        }
    }

    //Pour faire un triangle de Pascal par Nadir
    // function facto($number) { 

    //     if ($number < 2) { 
    //         return 1; 
    //     } else { 
    //         return ($number * facto($number-1)); 
    //     } 
    // }
    
    // function binomialCoeff($q,$p)
    // {
    //     return facto($p)/(facto($q)*facto($p-$q));
    // }
    
    // function affichePascal($n) 
    // { 
    
    //     for ($line = 0; $line < $n; $line++) 
    //     { 
    
    //         for ($i = 0; $i <= $line; $i++) 
    //                 echo "".binomialCoeff($line, $i)." "; 
                      
    //         echo "\n"; 
    //     } 
    // }
    echo "<br>";
    function diviseStr($str){
        $x = "";
        for($i = 0; $i < strlen($str);$i+=2){
            $x = $x.substr($str, $i, 2).":";
        }
        $y = substr($x, 0, strlen($x)-1);
        echo "<br>$y";
    }
    diviseStr("082307");

    echo "<br>";
    function convertToStr(&$x){
        $x = (string) $x;
        return $x;
    }
    $test = 5;
    echo gettype(convertToStr($test));
    echo "<br>";
    //- Écrivez un script PHP pour extraire le nom de fichier de la chaîne suivante. 
    // Exemple de chaîne : 'www.example.com/public_html/index.php'
    //Résultat attendu : 'index.php’
    function findFileName($str){
        $posSlash = 0;
        for($i=0;$i<strlen($str);$i++){
            if(substr($str, $i, 1) == "/"){
                $posSlash = $i;
            };
        }
        $fileName = substr($str, $posSlash+1, strlen($str)-$posSlash);
        echo "<br>$fileName";
    }
    findFileName('www.example.com/public_html/index.php');

    echo "<br>";
    //     - Rédigez un script PHP pour extraire le nom d'utilisateur de l'ID d'e-mail suivant. Allez dans l'éditeur
    // Exemple de chaîne : ' rayy@example.com '
    // Résultat attendu : 'rayy’

    function recupUser($str){
        $posAt = 0;
        for($i=0;$i<strlen($str);$i++){
            if(substr($str, $i, 1) == "@"){
                $posAt = $i;
            };
        }
        $user = substr($str, 0, $posAt);
        echo "<br>$user";
    }
    recupUser("rayy@example.com");

    echo "<br><br>";
    //- Ecrivez un script PHP pour supprimer tous les zéros non significatifs d'une chaîne. 
    // Chaîne d'origine : '000547023.24'
    // Résultat attendu : '547023.24'
    function strip0($str){
        $i = 0;
        while(substr($str, $i, 1) == "0"){
            $i++;
        }
        // echo "$i<br>";
        $n = substr($str, $i, strlen($str)-$i);
        echo "$n";
    }
    strip0('000547023.24');

?>