<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Portfolio"> 
    <title>Portfolio David Vauzelle</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
</head>
<body>
    <header class="hero-header">
        <!-- Pour récupérer la nav bar -->
        <?php include 'navbar.php';?>

        <div class="container-hero-header">
            <h1 class="h1-hero-header">
                <div class="titre-haut-hero-header">
                    <span class="span-titre-header">&lt;h1&gt;</span>
                    <span class="texte-prenom-nom">David Vauzelle</span>
                </div>
                <div class="titre-bas-hero-header">
                    <span class="texte-metier">Futur Développeur Web</span>
                    <span class="span-titre-header">&lt;&#47;h1&gt</span>
                </div>
            </h1>
        </div>
    </header>

    <main>
        <section>
            <h2>A propos de Moi !</h2>
            <div class="photo-profil">
                <img src="./images/photo-david.jpg" alt="Une photo de profil de David">
            </div>  
        </section>

        <section>
            <h2>Compétences</h2>
        </section>

        <section>
            <h2>Formations</h2>
        </section>
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>