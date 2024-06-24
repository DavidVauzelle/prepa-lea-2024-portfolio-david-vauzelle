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
    <title>Page Admin Liste des Contacts</title>
    <!-- <link rel="stylesheet" href="../style/reset.css"> -->
    <!-- <link rel="stylesheet" href="../style/nav-footer.css"> -->
</head>
<body>
    <header>
        <nav>
            <a href="../index.php#accueil">ACCUEIL</a>
                <div>
                    <a href="../mon-cv.php">Mon CV</a>
                    <a href="../realisations.php">Mes Réalisations</a>
                </div>
            <a href="../contact.php">Contacts</a>
        </nav>
    </header>

    <main>
        <?php
            // Récupération des contacts pour les afficher sur la page admin contact-liste
            $sql = "SELECT * FROM `contacts`";
            $resultat = mysqli_query($connexion, $sql);

            // fetch_all --> permet de stocker les données de la requête dans un tableau
            $resultat = $resultat->fetch_all();
            // print_r($resultat);

            // Si résultat dans le tableau 0, on stock les données du tableau dans une variable
            if (isset($resultat[0])) {
                $listeContact = $resultat[0];
            }
        ?>
        <section>
            <div>
                <h1>Liste des différents contacts</h1>
                <?php if (isset($listeContact)) : ?>
                        
                    <?php foreach($resultat as $listeContact) : ?>
                        <section>
                            <?php if (isset($listeContact[0])) : ?>
                                <article>
                                    <ul>
                                        <li>Identifiant : <?php echo $listeContact[0]; ?></li>
                                        <li>Nom : <?php echo $listeContact[1]; ?></li>
                                        <li>e-mail : <?php echo $listeContact[2]; ?></li>
                                        <li>Téléphone : <?php echo $listeContact[3]; ?></li>
                                        <li>Message : <?php echo $listeContact[4]; ?></li>
                                    </ul>
                                </article>
                            <?php endif; ?>
                        </section>
                    <?php endforeach; ?>
                            
                <?php endif; ?>
            </div>
        </section>    
    </main>
</body>
</html>
    
