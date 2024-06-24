<?php

    // Connexion à la bdd
    include 'connexion.php';
            
    // Récupération des contacts pour les afficher sur la page admin contact-liste
    $sql = "SELECT * FROM `contact`";
    $resultat = mysqli_query($connexion, $sql);

    // fetch_all --> permet de stocker les données de la requête dans un tableau
    $resultat = $resultat->fetch_all();
    print_r($resultat);

    // Si résultat dans le tableau 0, on stock les données du tableau dans une variable
    if (isset($resultat[0])) {
        $listeContact = $resultat[0];
    }

?>
<main>
    <section>
        <div>
            <h1>Liste des différents contacts</h1>
            <?php if (isset($listeContact)) : ?>
                    
                <?php foreach($resultat as $listeContact) : ?>
                    <section>
                        <?php if (isset($listeContact[0])) : ?>
                            <article>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <h2><?php echo $listeContact[1]; ?></h2>   
                                <p><?php echo $listeContact[2]; ?></p>
                                <img src="<?php echo $listeContact[4]; ?>" 
                                alt="<?php echo $listeContact[5]; ?>">
                            </article>
                        <?php endif; ?>
                    </section>
                <?php endforeach; ?>
                        
            <?php endif; ?>
        </div>
    </section>    
</main>