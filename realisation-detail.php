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
    <header >
        <!-- Pour récupérer la nav bar -->
        <?php 
            include 'navbar.php';
        ?> 
    </header>

    <main>
        <?php

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            
                // Récupération des projets pour les afficher sur la page d'accueil
                $sql = "SELECT * FROM projets WHERE id=$id";
                $resultat = mysqli_query($connexion, $sql);
                
                // fetch_all --> permet de stocker les données de la requête dans un tableau
                // $projets = $resultat->fetch_all(MYSQLI_ASSOC);

                $projet = $resultat->fetch_assoc();

                // echo '<pre>';
                // print_r($projet);
                // echo '</pre>';

            }

        ?>
        <div class="container-page-realisation-detail">
            <section>
                <?php if (isset($projet)) : ?>
                    <article class="realisation">
                        <h2><?php echo $projet['titre']; ?></h2>   
                        <p><?php echo $projet['description-detail']; ?></p>
                        <div>
                            <img src="<?php echo $projet['image']; ?>" 
                            alt="<?php echo $projet['alt']; ?>">    
                        </div>
                    </article>
                <?php endif; ?>          
            </section>
        </div>  
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>