<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Projet Portfolio"> 
    <title>Page Mon CV</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/nav-footer.css">
    <link rel="stylesheet" href="./style/mon-cv.css">
</head>
<body>
    <header>
        <!-- Pour récupérer la nav bar -->
        <?php include 'navbar.php';?> 
    </header>

    <main>
        <div class="container-cv">
            <div class="bloc-1-cv">
                <section class="presentation-cv">
                    <div class="contenu-1-presentation-cv">
                        <h1 class="titre-principal-cv">
                            <div>
                                <span class="titre-haut-cv">David Vauzelle</span>
                            </div>
                            <div class="titre-bas-cv">
                                <span class="texte-metier">Développeur Full Stack</span>
                            </div>
                        </h1>
                    </div>
                    
                    <div class="contenu-2-presentation-cv">
                        <div class="container-photo-profil">
                            <img class="photo-profil" src="./images/photo-david.jpg" alt="Une photo de profil de David">
                        </div>
                        <div class="bloc-texte-presentation-cv">
                            <div class="texte-presentation-cv">
                                <p class="p-presentation-cv">Passionné d'informatique et de développement,</p> 
                                <p class="p-presentation-cv">je suis actuellement en reconversion professionnelle et</p>
                                <p class="p-presentation-cv">à la recherche d'une alternance du 2 septembre 2024 au 12 septembre 2025,</p> 
                                <p class="p-presentation-cv">afin de préparer le titre professionnel RNCP37674 "Développeur Web / Web Mobile".</p>
                            </div>
                            <a class="btn" href="documentation/cv-david-vauzelle.pdf" target="_blank">Télécharger mon CV</a>
                        </div>                    
                    </div> 
                </section>
            </div>  
            
            <div class="bloc-2-cv">
                <section class="competences">
                    <h2 class="titre-blue">COMPETENCES</h2>
                    <ul>
                        <li>Comprendre les Principes du Versioning et Configurer Git</li>
                        <li>Gérer le Code Source et Collaborer avec Git</li>
                        <li>Maîtriser les Fondamentaux de la Structuration HTML</li>
                        <li>et de la Syntaxe CSS</li>
                        <li>Découper / Intégrer une Maquette</li>
                        <li>Styliser une Page Web</li>
                        <li>Comprendre les Concepts de Base des Bases de Données</li>
                        <li>Base de Données MySQL : Conception, Requête</li>
                        <li>Comprendre les Fondamentaux de l'Algorithmique</li>
                        <li>Maîtriser les Fondamentaux des Concepts de Base de JavaScript</li>
                    </ul>
                </section>
                <section class="competences-transversales">
                    <h2 class="titre-blue">COMPETENCES TRANSVERSALES</h2>
                    <ul>
                        <li>Compétences en Bureautique et en Informatique</li>
                        <li>Respect des Normes, Consignes et Procédures</li>
                        <li>Organisation, Structuration</li>                            <li>Méthodologie, Rigueur</li>
                        <li>Sens de l'Ecoute et de la Relation Client</li>
                        <li>Travailler en Equipe</li>
                        <li>Résoudre un problème technique</li>
                    </ul>
                </section>
            </div>

            <div class="bloc-3-cv">
                <section class="experiences">
                    <h2 class="titre-blue">EXPERIENCES</h2>
                    <div class="contenu-experiences-cv">
                        <h3>DEPUIS LE 18 DECEMBRE 2023</h3>
                        <div>
                            <P>
                                Pré-qualification Développeur Web / Web Mobile à <span span-contenu-cv>l'Ecole Atypique.</span>
                            </P>
                            <p>Initiation au HTML5 / CSS3 / JS / PHP / GitHub...</p>
                        </div>
                        <h3>DU 4 JUILLET AU 30 NOVEMBRE 2023</h3>
                        <div>
                            <P>
                                Formation Intégrateur Web avec <span span-contenu-cv>OpenClassrooms.</span>
                            </P>
                            <p>Initiation au HTML5 / CSS3.</p>
                        </div>
                        <h3>DU 29 MARS 2018 AU 5 FEVRIER 2019</h3>
                        <div>
                            <P>
                                Chargé de Clientèle à <span span-contenu-cv>AQUITEL.</span>
                            </P>
                        </div>
                        <h3>DU 30 NOVEMBRE 2016 AU 30 JUIN 2017</h3>
                        <div>
                            <P>
                                Chargé de Clientèle à <span span-contenu-cv>ARMATIS LC.</span>
                            </P>
                            <p>Services Déclaration de Sinitre Habitation et Bris de Glace Auto.</p>
                        </div>
                        <h3>
                            DU 19 JUIN 2014 AU 30 NOVEMBRE 2015
                        </h3>
                        <div>
                            <P>
                                Chargé de Clientèle à <span span-contenu-cv>Laser Contact.</span>
                            </P>
                            <p>Activités EDF Particuliers et Professionnels.</p>          
                        </div>
                    </div>
                </section>
            </div>

            <div class="bloc-4-cv">
                <section class="savoirs-etre">
                    <h2 class="titre-blue">SAVOIRS ETRE</h2>
                    <ul>
                        <li>Empathie</li>
                        <li>Curiosité</li>
                        <li>Patience</li>
                        <li>Bienveillance</li>
                        <li>Autonomie</li>
                        <li>Ecoute Active</li>
                        <li>Entraide</li>
                    </ul>
                </section>
                <section class="scolaire">
                    <h2 class="titre-blue">SCOLAIRE</h2>
                    <ul>
                        <li><span class="span-contenu-cv">2011-2013 : </span>BTS SIO Option SISR.</li>
                        <li><span class="span-contenu-cv">2010-2011 : </span>1ère année de BTS Informatique.</li>
                        <li><span class="span-contenu-cv">Juin 2010 : </span>Obtention du BAC Pro ELEEC.</li>
                        <li><span class="span-contenu-cv">Juin 2008 : </span>Obtention du BEP Electrotechnique.</li>
                    </ul>
                </section>
            </div>

            <div class="bloc-5-cv">
                <section class="loisirs">
                    <h2 class="titre-blue">LOISIRS</h2>
                    <ul>
                        <li>L'Informatique</li>
                        <li>Les Jeux Vidéo</li>
                    </ul>
                </section>
                <section class="coordonnees">
                    <h2 class="titre-blue">COORDONNEES</h2>
                    <ul>
                        <li>Tél : 07 81 66 06 79</li>
                        <li>e-mail : dvauzelle@deastanceservices.fr</li>
                        <li>9 BOULEVARD NICEPHORE NIEPCE</li>
                        <li>RES ALTAIRE ETG3 APPT78</li>
                        <li>86360 CHASSENEUIL DU POITOU</li> 
                        <li>Permis B</li>
                    </ul>
                </section>    
            </div>     
        </div>
    </main>

    <!-- Pour récupérer le footer -->
    <?php include 'footer.php';?>
    
</body>
</html>