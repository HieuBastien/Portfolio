<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <title>Portfolio</title>
    </head>

    <body id="imagefond">

        <section id="couleur">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container">                    
                    <a class="navbar-brand js-scroll-trigger" href="accueil.php">
                        <i class="fas fa-home"></i>
                    </a>
                    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item textmenu dropdown">
                                <a class="nav-link js-scroll-trigger taille_cara dropdown-toggle" href="accueil.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Présentation</a>                            
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="Delpeyrat.php">Delpeyrat</a>
                                    <a class="dropdown-item" href="CESI.php">CESI</a>
                                </div>
                            </li>                            
                            <li class="nav-item,textmenu">
                                <a class="nav-link js-scroll-trigger taille_cara" href="parcours professionnel.php">Parcours</a>
                            </li>
                            <li class="nav-item,textmenu">
                                <a class="nav-link js-scroll-trigger taille_cara" href="projets.php">Projets</a>
                            </li>
                            <li class="nav-item,textmenu">
                                <a class="nav-link js-scroll-trigger taille_cara" href="contact.php">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <div class="container container-centrer">

            <h1 id="titre">GESTIONNAIRE EN MAINTENANCE ET SUPPORT INFORMATIQUE</h1>

            <hr id="trait"> 

            <section>
                <p class="textcesi espace">
                    Le CESI est un groupe d’enseignement supérieur et de formation professionnelle.
                    <br>
                    A travers 24 campus répartis en France, le CESI propose un panel de formation repartit en 5 pôles :
                <div class="container-cesi">
                    <ul  class="textcesi">
                        <li>
                            <span class="entreprise">ei.CESI</span> - 1è école d’ingénieurs par apprentissage en France.
                        </li>
                        <li>
                            <span class="entreprise">exia.CESI</span> - école d’ingénieurs en informatique.
                        </li>
                        <li>
                            <span class="entreprise">CESI alternance</span> - école supérieure des métiers.
                        </li>
                        <li>
                            <span class="entreprise">CESI entreprises</span> - formation continue à destination des managers.
                        </li>
                        <li>
                            <span class="entreprise">CESI certification</span> - organisme certificateur.
                        </li>                                        
                    </ul>
                    </p>
                    <div id="imagecesi">
                        <a href="https://www.cesi.fr/" target="_blank">
                            <img class="bordures imagecesi" src="images/logo-groupe-cesi.png" width="250" alt=""/>
                        </a>
                    </div>
                </div>
            </section>

            <section>
                <P class="textcesi">
                    Pour ma part je suis actuellement en contrat d'alternance avec le CESI de Pau sur la formation 
                    <br>
                    "Gestionnaire en maintenance et support informatique". Les objectifs de la formation sont multiples :
                </p>
                <ul class="textcesi">
                    <li>Installer et configurer les PC et leurs périphériques</li>
                    <li>Mettre en place les accès aux réseaux (locaux, intranet, internet)</li>
                    <li>Maintenir le parc-informatique</li>
                    <li>Assister les utilisateurs dans l’utilisation de l’outil informatique</li>
                    <li>Répondre aux besoins des utilisateurs</li>
                </ul>
                <p class="textcesi">
                    vous pouvez retrouver les informations de cette formation ici :
                </P>
                <div id="iconecesi">
                    <di class="textcesi">
                        <a href="PDF/calendrier.pdf" target="_blank">
                            <i class="far fa-calendar-alt"></i>
                        </a>
                        <br>
                        Calendrier Type de la formation
                    </di>
                    <di class="textcesi">
                        <a href="PDF/programme.pdf" target="_blank">
                            <i class="far fa-list-alt"></i>
                        </a>
                        <br>
                        Programme de la formation
                    </di>
                    <di class="textcesi">
                        <a href="https://www.cesi-alternance.fr/formation/informatique_numerique/inftsmsi-gestionnaire_en_maintenance_et_support_informatique" target="_blank">
                            <i class="fas fa-university"></i>                           
                        </a>
                        <br>
                        Site de la formation
                    </di>
                </div>
            </section>
        </div>

        <script>
            $(function () {
                $(document).scroll(function () {
                    var $nav = $(".fixed-top");
                    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                });
            });

            $(function () {
                $(document).scroll(function () {
                    var $nav = $(".dropdown-menu");
                    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                });
            });
        </script>
    </body>
</html>
