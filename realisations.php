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
    <link rel="stylesheet" href="./style/projets.css">
</head>
<body>
    <header>
        <!-- Pour récupérer la nav bar -->
        <?php 
            include 'navbar.php';
        ?> 
    </header>

    <main>
        <?php
            
            // Récupération des projets pour les afficher sur la page d'accueil
            $sql = "SELECT * FROM `projets`";
            $resultat = mysqli_query($connexion, $sql);

            // fetch_all --> permet de stocker les données de la requête dans un tableau
            $projets = $resultat->fetch_all(MYSQLI_ASSOC);

            // echo '<pre>';
            // print_r($projets);
            // echo '</pre>';

        ?>
        <section>
            <div>
                <h1>Mes derniers projets</h1>
                <?php if (isset($projets)) : ?>
                    
                        <?php foreach($projets as $projet) : ?>
                            <section>
                                <article>
                                    <h2><?php echo $projet['titre']; ?></h2>   
                                    <p><?php echo $projet['description-accueil']; ?></p>
                                    <img src="<?php echo $projet['image']; ?>" 
                                    alt="<?php echo $projet['alt']; ?>">
                                    <a href="realisation-detail.php?id=<?php echo $projet['id']; ?>">Détail Réalisation</a>
                                    <a href="./administration/realisation-liste.php">Admin</a>
                                </article>
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