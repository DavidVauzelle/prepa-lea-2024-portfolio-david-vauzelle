<!-- <?php

    // Connexion à la bdd
    include 'connexion.php';

?>
<?php
            
    // Récupération des projets pour les afficher sur la page d'accueil
    $sql = "SELECT * FROM `projets`";
    $resultat = mysqli_query($connexion, $sql);

    // fetch_all --> permet de stocker les données de la requête dans un tableau
    $resultat = $resultat->fetch_all();
    print_r($resultat);

    // Si résultat dans le tableau 0, on stock les données du tableau dans une variable
    if (isset($resultat[0])) {
        $contenuAccueil = $resultat[0];
    }

?>
    -->

