<?php
include 'connexion.php';

// $_POST est t'il vide ?
if (isset($_POST['envoyer'])) {
    // mysqli_real_escape_string --> Protège des injections SQL
        $titre = mysqli_real_escape_string($connexion, $_POST['titre']);
        $descriptionAcceuil = mysqli_real_escape_string($connexion, $_POST['description-accueil']);
        $descriptionDetail = mysqli_real_escape_string($connexion, $_POST['description-detail']);   

    // Vérifier si aucun champ du formulaire est vide

    if (empty($titre) || empty($descriptionAcceuil) || empty($descriptionDetail)) {
        echo 'Le formulaire n\'est pas saisi correctement';
    } else {
        $sql = "INSERT INTO `projets` (`titre`, `description-accueil`, `description-detail`) VALUES ('$titre', '$descriptionAcceuil', '$descriptionDetail')";
        $resultat = mysqli_query($connexion, $sql);
        $projet = $resultat->fetch_assoc();
    }

    // Vérifier si la requête a réussi
    if ($resultat) {
        // Rediriger vers la page index lorsque le formulaire est envoyé avec succès
        header('Location: realisation-liste.php');
    } else {
        echo "Erreur d'insertion des données dans la base de données" . mysqli_error($connexion);
    }
    // Fermer la connexion
    mysqli_close($connexion);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Portfolio"> 
    <title>Page Admin Ajout d'une Réalisation</title>
    <link rel="stylesheet" href="../style/contact.css">
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
        <div class="contenaire-contact">
            <form class="formulaire-contact" action="" method="post">
                <h1>Vous souhaitez modifier une réalisation ?</h1>
                <div class="champs-formulaire">
                    <label for="titre">Titre* : </label>
                    <input type="text" id="titre" name="titre" placeholder="Projet 1" required>     
                </div> 
                <div class="champ-message-formulaire">
                    <label for="texte">Description page d'Accueil* : </label><br>
                    <textarea class="textarea-formulaire-contact"
                        id="description-accueil"
                        name="description-accueil"
                        placeholder="Decription de la page d'Accueil du projet"
                        rows="5"
                        maxlength="500" 
                        required></textarea>      
                </div>
                <div class="champ-message-formulaire">
                    <label for="texte">Description page Détail* : </label><br>
                    <textarea class="textarea-formulaire-contact"
                        id="description-detail" 
                        name="description-detail"
                        placeholder="Decription de la page détail du projet"
                        rows="5"
                        maxlength="500" 
                        required></textarea>      
                </div>  
                <div class="button-contact">
                    <input class="input-button-formulaire" type="submit" name="envoyer" value="Envoyer">
                    <input class="input-button-formulaire" type="reset" value="Réinitialiser">
                    <a href="realisation-liste.php">Admin</a>
                </div>
            </form>        
        </div>   
    </main>
</body>
</html>