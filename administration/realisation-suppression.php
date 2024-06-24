<?php

    // Connexion à la bdd
    include 'connexion.php';


    // Vérifiez que l'ID est défini dans $_GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Reqête pour supprimer le projet correspondant à l'id
        $sql = "DELETE FROM `projets` WHERE id=$id";
        $resultat = mysqli_query($connexion, $sql);
    }
    header('Location: realisation-liste.php');

?>