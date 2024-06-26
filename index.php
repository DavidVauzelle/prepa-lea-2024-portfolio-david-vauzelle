<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Portfolio"> 
    <title>Portfolio David Vauzelle</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="./style/nav-footer.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header class="hero-header">
        <!-- Pour récupérer la nav bar -->
         <?php include 'navbar.php';?>
        <div class="container-hero-header">
            <div class="contenu-hero-header">
                <h1 class="h1-hero-header">
                    <div class="titre-haut-hero-header">
                        <span class="span-titre-header">&lt;h1&gt;</span>
                        <span class="texte-prenom-nom">David Vauzelle</span>
                    </div>
                    <div class="titre-bas-hero-header">
                        <span class="texte-metier">Développeur Full Stack</span>
                        <span class="span-titre-header">&lt;&#47;h1&gt</span>
                    </div>
                </h1>
            </div>    
        </div>
        
    </header>

    <main>
        <div class="contenu-presentation-accueil">
            <section class="presentation-accueil">   
                <h2>A propos de Moi !</h2>
                    <div class="photo-presentation-accueil">
                        <img src="./images/photo-david.jpg" alt="Une photo de profil de David">
                    </div> 
                    <div class="texte-presentation-accueil">
                        <p>
                            Bonjour, Moi c'est David, j'ai 32 ans et je suis passionnée par l'informatique et les jeux vidéo depuis l'enfance.
                            Dans l'informatique, j'aime notemment monter, nettoyer et ou formater des PC.
                            J'aime le faire pour moi, mais aussi pour aider les autres.
                            Pour les jeux vidéo, j'aime jouer seul ou à plusieurs, mais aussi streamer afin de partager cette passion avec d'autres.
                            Actuellement en reconversion professionnelle, je prépare le titre "Développeur web/web mobile" afin de devenir Développeur Full Stack. 
                            Quand au développement web, ce que j'aime, c'est de partir d'une page blanche, de créer un projet comme un enfant ou adulte qui assemble un set Lego.
                            J'aime le Back End qui permet de faire le lien entre le visible et l'invisible pour l'utilisateur, tel un magicien réalisant un tour de magie.
                        </p>
                    </div>    
            </section>    
        </div>

        <section class="competences-accueil">
            <h2>Compétences</h2>
        </section>

        <section class="formations-accueil">
            <h2>Formations</h2>
        </section>
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>