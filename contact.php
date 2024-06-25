<?php
include './administration/connexion.php';

// $_POST est t'il vide ?
if (isset($_POST['envoyer'])) {
    // mysqli_real_escape_string --> Protège des injections SQL
        $nom = mysqli_real_escape_string($connexion, $_POST['nom']);
        $email = mysqli_real_escape_string($connexion, $_POST['email']);
        $telephone = mysqli_real_escape_string($connexion, $_POST['telephone']);
        $message = mysqli_real_escape_string($connexion, $_POST['message']);   

    // Vérifier si aucun champ du formulaire est vide

    if (empty($nom) || empty($email) || empty($telephone) || empty($message)) {
        echo 'Le formulaire n\'est pas saisi correctement';
    } else {
        $sql = "INSERT INTO `contacts` (`nom`, `email`, `telephone`, `message`) VALUES ('$nom', '$email', '$telephone', '$message')";
        $resultat = mysqli_query($connexion, $sql);  
    }
    // Rediriger vers la page index lorsque le formulaire est envoyé avec succès
    // Vérifier si la requête a réussi
    if ($resultat) {
        header('Location: ./index.php#accueil');
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
    <title>Page Contact</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
</head>
<body>
    <header>
        <!-- Pour récupérer la nav bar -->
        <?php include 'navbar.php';?>    
    </header>

    <main>   
        <div class="contenaire-contact">
            <form class="formulaire-contact" action="contact.php" method="post">
                <h1>Vous souhaitez me contacter ?</h1>
                <div class="champs-formulaire">
                    <label for="name">Nom* : </label>
                    <input type="text" id="name" name="nom" placeholder="Dupont" required>     
                </div> 
                <div class="champs-formulaire">
                    <label for="email">Email* : </label>
                    <input type="email" id="email" name="email" placeholder="nicolas.duppont@exemple.fr"required> 
                </div>
                <div class="champs-formulaire">
                    <label for="tel">Numéro de téléphone* : </label>
                    <input type="tel" id="tel" name="telephone" placeholder="06..."required>
                </div>   
                <div class="champ-message-formulaire">
                    <label for="message">Message* : </label><br>
                    <textarea class="textarea-formulaire-contact"
                        id="message" 
                        name="message"
                        placeholder="votre message ici"
                        rows="5"
                        maxlength="500" 
                        required></textarea>      
                </div>
                <div class="button-contact">
                    <input class="input-button-formulaire" type="submit" name="envoyer" value="Envoyer">
                    <input class="input-button-formulaire" type="reset" value="Réinitialiser">
                    <a href="./administration/contact-liste.php">Admin</href=>
                </div>
            </form>        
        </div>   
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
</body>
</html>
