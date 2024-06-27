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
        
    </header>

    <main>
        <div class="container-accueil"> 
            <div class="bloc-1-accueil">
                <section class="presentation-accueil">
                    <h2>A propos de Moi !</h2>
                    <div class="container-presentation-accueil">
                        <div class="container-photo-profil">
                            <img class="photo-profil" src="./images/photo-david.jpg" alt="Une photo de profil de David">
                        </div> 
                        <div class="contenu-presentation-accueil">
                            <p>Bonjour, Moi c'est <span>David</span>, j'ai 32 ans et je suis passionné par <span>l'informatique et les jeux vidéo</span>  depuis l'enfance.</p>
                            <p>Dans l'informatique, ce que j'aime, c'est monter, nettoyer et ou formater des PC. J'aime le faire pour moi, mais aussi pour aider les autres.</p>
                            <p>Pour les jeux vidéo, j'aime jouer seul ou à plusieurs, mais aussi streamer afin de partager cette passion avec d'autres.</p>
                            <p>Quand au développement web, ce que j'aime, c'est de partir d'une page blanche, de créer un projet comme un enfant ou adulte qui assemble un set Lego.</p>
                            <p>J'aime le Back End qui permet de faire le lien entre le visible et l'invisible pour l'utilisateur, tel un magicien réalisant un tour de magie.</p>
                            <p>Actuellement, je prépare le titre <span>"Développeur web/web mobile"</span> afin de devenir <span>Développeur Full Stack.</span></p>
                        </div>  
                    </div>
                         
                </section>
            </div>

            <div class="bloc-2-accueil">
                <section class="competences-accueil">
                    <h2>Compétences</h2>
                    <div class="container-competences-accueil">
                        <div class="contenu-competences-accueil">
                            <ul>
                                <li>Hyper Text Markup Language <span>(HTML5)</span></li>
                                <li>Cascading Style Sheets <span>(CSS3)</span></li>
                                <li>JavaScript <span>(JS)</span></li>
                                <li>PHP</li>
                                <li>SQL</li>
                                <li>Visual Studio Code</li>
                                <li>Git Hub</li>
                            </ul>    
                        </div>
                        <div class="contenu-competences-accueil">
                            <ul>
                                <li>Comprendre les Principes du Versioning et Configurer Git</li>
                                <li>Maîtriser les Fondamentaux de la Structuration HTML et de la Syntaxe CSS</li>
                                <li>Styliser une Page Web</li>
                                <li>Base de Données MySQL : Conception, Requête</li>
                                <li>Maîtriser les Fondamentaux des Concepts de Base de JavaScript</li>
                            </ul>    
                        </div>
                    </div>
                </section>
            </div>

            <div class="bloc-3-accueil">
                <section class="formations-accueil">
                    <h2>Formations</h2>
                    <div class="container-formations-accueil">
                        <div class="formation-1-accueil">
                            <h3>Pré-qualification Développeur Web / Web Mobile à <span>l'Ecole Atypique</span></h3>
                            <div class="contenu-formations">
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                    <li>JS</li>
                                    <li>PHP</li>
                                </ul>
                                <ul>
                                    <li>Git Hub</li>
                                    <li>VS Code</li>
                                    <li>Laragon</li>
                                </ul>    
                            </div>   
                        </div>
                        <div class="formation-2-accueil">   
                                <h3>Formation Intégrateur Web avec <span>OpenClassrooms</span></h3>
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                    <li>VS Code</li>
                                </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>