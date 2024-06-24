<?php

    // Connexion à la bdd
    include './administration/connexion.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Portfolio"> 
    <title>Page Mes Réalisations</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
</head>
<body>
    <header>
        <!-- Pour récupérer la nav bar -->
        <?php include 'navbar.php';?> 
    </header>

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
                $contenuDetail = $resultat[0];
            }

        ?>
        <section>
            <div>
                <?php if (isset($contenuDetail)) : ?>
                    
                        <?php foreach($resultat as $contenuDetail) : ?>
                            <section>
                                <?php if (isset($contenuAccueil[0])) : ?>
                                    <article>
                                        <h2><?php echo $contenuDetail[1]; ?></h2>   
                                        <p><?php echo $contenuDetail[2]; ?></p>
                                        <img src="<?php echo $contenuDetail[4]; ?>" 
                                        alt="<?php echo $contenuDetail[5]; ?>">
                                    </article>
                                <?php endif; ?>
                            </section>
                        <?php endforeach; ?>
                        
                <?php endif; ?>          
            </div>
        </section>  
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>