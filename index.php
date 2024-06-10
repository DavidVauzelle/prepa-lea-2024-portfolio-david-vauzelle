<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Portfolio"> 
    <title>Portfolio David Vauzelle</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
</head>
<body>
    <header class="hero-header">
        <!-- <nav class="navbar">
            <a href="index.php#accueil">Accueil</a>
                <div class="liens-navbar">
                    <a href="./pages/mon-cv.php">Mon CV</a>
                    <a href="./pages/realisations.php">Mes Réalisations</a>
                </div>
            <a href="./pages/contact.php">Contact</a>
        </nav>     -->

        <!-- Pour récupérer la nav bar -->
        <?php include 'navbar.php';?>

        <div class="container-hero-header">
            <div class="contenu-hero-header">
                <div class="titre-page-accueil">
                    <h1 class="h1-page-accueil">&lt;h1&gt; David Vauzelle,</h1>
                    <span class="span-header"> futur développeur web &lt;&#47;h1&gt;</span>
                </div>
                <div class="photo-profil">
                    <img src="./images/photo-david.jpg" alt="Une photo de profil de David">
                </div>    
            </div>
        </div>
    </header>

    <main>
    
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>