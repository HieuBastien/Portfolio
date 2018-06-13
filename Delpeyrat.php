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

            <div class="container">

                <h1 class="titre">DELPEYRAT</h1>
                <hr class="trait">

                <section class="espace">
                    <p class="centrertext">
                        L’histoire de l’entreprise Delpeyrat commence en 1890, avec <span class="couleurnom">Pierre Delpeyrat</span>. 
                        Il est l’un des premiers à s’intéresser à la mise en conserve des aliments et au fil des ans développe 
                        ce processus aux spécialités de sa région (Périgord) avec les foies gras, confits, pâtés…
                        <br>
                        Elle s’est ensuite spécialisée dans la production de produits gastronomiques à base de canard 
                        puis elle s’est étendue à différents marchés comme la production de jambon sec et de saumon. 
                        L’entreprise est aujourd’hui une marque incontournable du paysage gastronomique français.  
                    </p>
                </section>


                <h1 class="titre-presentation">FORMATION PROFESSIONNELLE</h1>
                <hr class="trait">

                <section class="textpresentation espace">
                    <div>
                        <p>
                            Pour mon alternance, j'ai intégré le service informatique de la société. 
                            Ce service possède un périmètre d’activité étendu et réalisent de nombres tâches :
                        </p>
                        <ul>
                            <!--class li-espace permet de rajouter 5px d'espace entre deux points (plus petit qu'un br)-->
                            <li class="li-espace">
                                Nous assurons le support de niveau 1 et 2 de la société,
                                c'est pourquoi notre principale tâche est de répondre aux appels et 
                                aux tickets des utilisateurs via GLPI.
                            </li>
                            <li class="li-espace">
                                Nous assurons la mise en place et la maintenance du matériel informatique ainsi 
                                que la gestion des contrats des prestataires extérieures, qui se chargent 
                                de la maintenance de matériel plus spécialisé. 
                                Nous devons aussi assurer la maintenance dans un milieu industriel, 
                                avec ses contraintes de productions et son matériel très spécifique.
                            </li>
                            <li class="li-espace">
                                Notre périmètre couvre la maintenance des baies de brassages, en cas de dysfonctionnement
                                ou lors de l'installation de nouveaux matériel. Nous avons aussi en charge le support pour
                                les serveurs TSE, d'impression et les différentes machines virtuelles de l'entreprise
                            </li>
                            <li>
                                Nous sommes en charge de rédiger des procédures lorsqu'un problème survient, afin
                                d'être plus efficace et efficient les fois prochaines.
                            </li>
                        </ul>
                    </div>
                </section>


                <h1 class="titre-presentation">ALTERNANCE</h1>
                <hr class="trait">

                <section class="textpresentation espace">
                    <div>
                        <p>
                            Pour les personnes intéressés par l'alternance, professionnel ou particulier, voici quelques
                            informations importantes :
                        </p>
                        <ul>
                            <li class="li-espace">
                                L'alternance permet de se former à un métier, d'un côté grâce aux connaissances scolaires fournit par
                                le centre de formation et de l'autre grâces aux applications concrètes que propose le monde du travail.
                            </li>
                            <li class="li-espace">
                                En moyenne le rythme de la formation correspond à trois semaines en entreprise et une semaine en centre
                                de formation. Vous avez, cependant, le statut de salarié au même titre que vos collègues.
                            </li>
                            <li>
                                La rémunération dépend de l'âge de l'alternant. vous pouvez retrouver la grille en cliquant sur
                                les liens ci-dessous.
                            </li>                   
                        </ul>
                        <p>
                            Vous pouvez retrouver toutes les informations ci-dessous :
                        </p>
                    </div>

                    <div class="iconepresentation">
                        <div>
                            <!--class ligne permet de supprimer le soulignage du lien hypertexte-->
                            <a class="ligne" href="https://www.alternance.emploi.gouv.fr/portail_alternance/jcms/recleader_6113/decouvrir-l-alternance" target="_blank">
                                <i class="fas fa-door-open"></i>
                            </a>
                            <br>
                            Portail de l'alternance
                        </div>
                        <div>
                            <a class="ligne" href="https://www.alternance.emploi.gouv.fr/portail_alternance/jcms/gc_5504/simulateur-employeur" target="_blank">
                                <i class="far fa-money-bill-alt"></i>
                            </a>
                            <br>
                            Simulateur de rémunération
                        </div>
                    </div>
                </section>
            </div>
            
            <!--ces deux scripts permetttent de rajouter un fond au scroll pour le menu et le dropdown-->
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
