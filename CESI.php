<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../portfolio/images/favicon-256.png" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <title>Portfolio</title>
    </head>

    <!--class qui permet d'intégrer l'image en backgroud-->
    <body class="imagefond">

        <!--class bootstrap qui permet de rendre la page responsive-->
        <div class="container">

            <section>
                <!--menu fixé en haut de page même en scrollant-->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                    <div class="container">

                        <!--Bouton home sur le côté gauche du menu-->
                        <a class="navbar-brand js-scroll-trigger" href="accueil.php">
                            <i class="fas fa-home"></i>
                        </a>
                        <!--menu burger lorsque le site est consulté sur petit écran-->
                        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse taille_cara" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">                                
                                <!--Menu dropdown permettant de présenter un menu deroulant-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link js-scroll-trigger dropdown-toggle" href="accueil.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Présentation</a>                            
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Delpeyrat.php">Delpeyrat</a>
                                        <a class="dropdown-item" href="CESI.php">CESI</a>
                                    </div>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="parcours professionnel.php">Parcours</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="projets.php">Projets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </section>
            <!--la class container-centrer est un media querie afin de centrer la page lorsque le site retrecie-->
            <div class="container container-centrer">

                <h1 class="titre">GESTIONNAIRE EN MAINTENANCE ET SUPPORT INFORMATIQUE</h1>
                <hr class="trait"> 

                <section class="textpresentation">
                    <p class="espace">
                        Le CESI est un groupe d’enseignement supérieur et de formation professionnelle.
                        <br>
                        A travers 24 campus répartis en France, le CESI propose un panel de formation repartit en 5 pôles :
                        
                        <!--media querie sur cet id afin de passer l'image en dessous du texte-->
                    <div id="container-cesi">
                        <ul>
                            <li class="li-espace">
                                <span class="entreprise">ei.CESI</span> - 1è école d’ingénieurs par apprentissage en France.
                            </li>
                            <li class="li-espace">
                                <span class="entreprise">exia.CESI</span> - école d’ingénieurs en informatique.
                            </li>
                            <li class="li-espace">
                                <span class="entreprise">CESI alternance</span> - école supérieure des métiers.
                            </li>
                            <li class="li-espace">
                                <span class="entreprise">CESI entreprises</span> - formation continue à destination des managers.
                            </li>
                            <li>
                                <span class="entreprise">CESI certification</span> - organisme certificateur.
                            </li>                                        
                        </ul>

                        <div>
                            <a href="https://www.cesi.fr/" target="_blank">
                                <img class="bordures" id="imagecesi" src="images/logo-groupe-cesi.png" width="250" alt=""/>
                            </a>
                        </div>

                    </div>
                </section>

                <section class="textpresentation">
                    <P>
                        Pour ma part je suis actuellement en contrat d'alternance avec le CESI de Pau sur la formation 
                        <br>
                        "Gestionnaire en maintenance et support informatique". Les objectifs de la formation sont multiples :
                    </p>
                    <ul>
                        <li class="li-espace">
                            Installer et configurer les PC et leurs périphériques
                        </li>
                        <li class="li-espace">
                            Mettre en place les accès aux réseaux (locaux, intranet, internet)
                        </li>
                        <li class="li-espace">
                            Maintenir le parc-informatique
                        </li>
                        <li class="li-espace">
                            Assister les utilisateurs dans l’utilisation de l’outil informatique
                        </li>
                        <li>
                            Répondre aux besoins des utilisateurs
                        </li>
                    </ul>
                    <p>
                        vous pouvez retrouver les informations de cette formation ici :
                    </P>
                </section>

                <section class="centrertext">
                    <div class="iconepresentation">
                        <div>
                            <a class="ligne" href="PDF/calendrier.pdf" target="_blank">
                                <i class="far fa-calendar-alt"></i>
                            </a>
                            <br>
                            Calendrier Type de la formation
                        </div>
                        <div>
                            <a class="ligne" href="PDF/programme.pdf" target="_blank">
                                <i class="far fa-list-alt"></i>
                            </a>
                            <br>
                            Programme de la formation
                        </div>
                        <div>
                            <a class="ligne" href="https://www.cesi-alternance.fr/formation/informatique_numerique/inftsmsi-gestionnaire_en_maintenance_et_support_informatique" target="_blank">
                                <i class="fas fa-university"></i>                           
                            </a>
                            <br>
                            Site de la formation
                        </div>
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
