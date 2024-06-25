<?php

    // Connexion à la bdd
    include 'connexion.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Portfolio"> 
    <title>Page Admin Liste des Réalisations</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="../style/nav-footer.css">
</head>
<body>
    <main>
        <?php
            
            // Récupération des projets pour les afficher sur la page d'accueil
            $sql = "SELECT * FROM `projets`";
            $resultat = mysqli_query($connexion, $sql);

            // fetch_all --> permet de stocker les données de la requête dans un tableau
            $resultat = $resultat->fetch_all();
            // print_r($resultat);

            // Si résultat dans le tableau 0, on stock les données du tableau dans une variable
            if (isset($resultat[0])) {
                $contenuAccueil = $resultat[0];
            }

        ?>
        <section>
            <div>
                <h1>Liste des projets</h1>
                <?php if (isset($contenuAccueil)) : ?>
                    
                        <?php foreach($resultat as $contenuAccueil) : ?>
                            <section>
                                <?php if (isset($contenuAccueil[0])) : ?>
                                    <article>
                                        <h2><?php echo $contenuAccueil[1]; ?></h2>   
                                        <p><?php echo $contenuAccueil[2]; ?></p>
                                        <img src="<?php echo $contenuAccueil[4]; ?>" 
                                        alt="<?php echo $contenuAccueil[5]; ?>">
                                        <a href="realisation-modification.php">Modifier Projet</a>
                                        <a href="realisation-suppression.php?id=<?php echo $contenuAccueil[0]; ?>">Supprimer Projet</a>
                                    </article>
                                <?php endif; ?>
                            </section>
                        <?php endforeach; ?>
                        
                <?php endif; ?>
                <a href="realisation-ajout.php">Ajout d'une réalisation</a>         
            </div>
        </section>  
    </main>
</body>
</html>