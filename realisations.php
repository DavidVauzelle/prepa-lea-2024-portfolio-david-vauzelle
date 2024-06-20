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
        <?php include './administration/index.php'; ?>

        <section>
            <div>
                <h1>Mes derniers projets</h1>
                <?php if (isset($contenuAccueil)) : ?>
                    
                        <?php foreach($resultat as $contenuAccueil) ?>
                            <section>
                                <?php if (isset($contenuAccueil[0])) ?>
                                <article>
                                    <h2><?php $contenuAccueil[1] ?></h2>   
                                    <p><?php $contenuAccueil[2] ?></p>
                                    <img src="<?php $contenuAccueil[4] ?>" 
                                    alt="<?php $contenuAccueil[5] ?>">
                                </article>
                            </section>
                        <?php endif; ?>
    



                <!-- echo '<div>';
                //     foreach($resultat as $contenuAccueil) { 
                //         echo '<div>';
                //             echo '<img src='. $contenuAccueil['url'] . ' alt="' . $contenuAccueil['alt'] . '"><br>';
                //         echo '</div>';

                //         echo '<div>';
                //             echo '<img src='. $contenuAccueil['url'] . ' alt="' . $contenuAccueil['alt'] . '"><br>';
                //         echo '</div>';
                        
                //         echo '<div>';
                //             echo '<img src='. $contenuAccueil['url'] . ' alt="' . $contenuAccueil['alt'] . '"><br>';
                //         echo '</div>';
                //     }
                //     echo '</div>';
                 
                } -->
            </div>
        </section>  
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>