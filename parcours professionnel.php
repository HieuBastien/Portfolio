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

            <section class="texteparcours">
                
                <!--utilisation du titre pour ajuster le reste de la page-->
                <h1 class="titre">Support Technique</h1>
                <div class="date">2016-2018</div>

                <div id="container-parcours-delp">
                    <div>
                        <span class="entreprise">Delpeyrat</span> - Mont de Marsan
                        <br>
                        Prise d’appels et gestion des tickets via GLPI : qualification et résolution des incidents de niveau 1 et 2.
                        Gestion de parc d’environ 2000 utilisateurs répartie sur 25 sites en France, 
                        mise en place de nouveaux utilisateurs, masterisation, 
                        maintenance matériel et logiciel, administration réseau.
                        <br>
                        <br>
                        Missions en entreprise : création d’une machine virtuelle Linux et installation OCS, 
                        mise en place d’une nouvelle politique de gestion des droits NTFS.
                    </div>    
                    <!--adapter la position de l'image-->
                    <div id="imagedelp">
                        <img src="images/delp.png" width="250" alt=""/>
                    </div>
                </div>

                <hr class="trait">

                <h1 class="titreparcours">Vendeur</h1>
                <div class="date">2015-2016</div>

                <div id="container-vendeur">
                    <div>
                        <span class="entreprise">Leclerc</span> - Mont de Marsan
                        <br>
                        <p>
                            Ma mission principal était de gérer le rayon PEM-GEM (petit et gros electroménager)
                            de l'espace culturel Leclerc de Mont-de-Marsan et de mettre en avant les produits.
                            En plus de cette gestion je participais aux achats du rayon et 
                            je m'occupais de la gestion et de la bonne tenue des stocks ainsi que l'animation 
                            du rayon
                        </p>
                        <div class="espacetexte">
                            <span class="entreprise">Conforama</span> - Mont de Marsan
                            <br>
                            <p>
                                j'ai été engagé afin de vendre les produits du rayon informatique, du GEM-PEM
                                (petit et gros électroménager) et du rayon brun (télévision).                       
                                Ma mission était de conseiller les clients, de garder les rayons propres et de
                                les animer.
                            </p>
                        </div>
                        <span class="entreprise">Darty</span> - Mont de Marsan
                        <br>
                        <p>
                            On m'a engagé pendant plusieurs mois comme responsable réserve
                            j'avais comme mission de gérer les stocks et les réceptions.
                            On m'a aussi demander de travailler comme conseiller au service après vente,
                            je devais donc gérer les dossiers clients ainsi que leurs suivis.    
                        </p>
                    </div>   

                    <div id="parcourcolonne">
                        <div id="imageleclerc">
                            <img class="bordures"src="images/leclerc.png" width="150" alt=""/>
                        </div>
                        <div id="imageconfo">
                            <img class="bordures" src="images/confo.png" width="200" alt=""/>
                        </div>
                        <div>
                            <img class="bordures" src="images/darty.png" width="150" alt=""/>
                        </div>
                    </div>
                </div>

                <hr class="trait">
                <h1 class="titreparcours">Conseiller pôle service</h1>
                <div class="date">2014-2015</div>

                <div class="container-parcours">
                    <div>
                        <span class="entreprise">Darty</span> - Rennes
                        <br>
                        En tant que conseiller pôle service, mes missions étaient multiples :
                        <ul>
                            <li class="li-espace">
                                Gérer le service après vente, ce qui comprend le suivi des réclamations clients
                                ainsi que le suivi des produits clients.
                            </li>
                            <li class="li-espace">
                                Gestion de la caisse et des financements proposé par Darty.
                            </li>
                            <li>
                                Gestion de la réserve, ce qui comprend la gestion des stocks et des réceptions.
                            </li>
                        </ul>
                    </div>               
                    <div id="imagedarty">
                        <img class="bordures" src="images/darty.png" width="150" alt=""/>
                    </div>
                </div>

                <hr class="trait">
                <h1 class="titreparcours">Manager</h1>
                <div class="date">2012-2014</div>

                <div class="container-parcours">
                    <div>
                        <span class="entreprise">Pizza in Box</span> - Rennes
                        <p>
                            J'ai été engagé en tant que co-manager pour l'une des trois boutiques Pizza in Box de rennes.
                            J'avais en charge, avec mon collègue, la gestion d'une équipe de 10 personnes ainsi que la
                            préparation des pizzas. 
                            <br>
                            Pour cela nous devions mettre en place les plannings, coordonner les tâches 
                            mais aussi gérer les stocks, les fournisseurs ainsi que les clients.
                            Notre mission était aussi de gérer les problèmes qui pouvaient survenir occasionnellement.                                                      
                        </p>
                    </div>               
                    <div id="imagepizza">
                        <img class="bordures" src="images/pizzabox.jpg" width="150" alt=""/>
                    </div>
                </div>


            </section>
        </div>

        <script>
//            ces deux scripts me permettent de faire apparaitre un fond sur le menu et sur le bouton présentation
//            au moment du scroll de plus il a été indiqué que le fond apparaissait 
//            lorsque le menu avait parcouru sa taille
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
