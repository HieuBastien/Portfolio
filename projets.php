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

                <div>
                    <section class="centrertext">
                        <h1 class="titre">PROJETS FILS ROUGE</h1>
                        <hr class="trait">
                        <div>
                            Vous pouvez consulter l'ensemble de mes projets réalisés au sein du CESI
                        </div>
                    </section>

                    <section id="colonnesprojet">

                        <div class="row">

                            <div class="col-md-6 col-lg-4">
                                <a href="PDF/Dossier Start.pdf" class="ligne" target="_blank">
                                    <div class="presentationprojet centrertext padding">
                                        PROJET SAS
                                        <br>
                                        <i class="fas fa-balance-scale"></i>
                                        <br>
                                        Mise en place des bonnes pratiques informatique
                                        en entreprise et reflexion sur la création d'une
                                        charte informatique
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="PDF/Dossier Start.pdf" class="ligne" target="_blank">
                                    <div class="presentationprojet centrertext">
                                        PROJET START
                                        <br>
                                        <i class="fas fa-sitemap"></i>
                                        <br>
                                        Mise en place d'un réseau d'entrepise, ce qui
                                        comprend la mise en place de l'infrastructure reseau
                                        ainsi que les postes utilisateurs (Windows et Linux).
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="PDF/Dossier Start.pdf" class="ligne" target="_blank">
                                    <div class="presentationprojet centrertext">
                                        PROJET EVOLUTION
                                        <br>
                                        <i class="fas fa-server"></i>
                                        <br>
                                        Mise en place infrastructure réseau Windows (AD, DHCP, DNS) 
                                        et Linux (NFS, Samba, FTP) ainsi qu'une application de gestion de parc en PHP.
                                    </div>
                                </a>
                            </div>                
                            <div class="col-md-6 col-lg-4">
                                <a href="PDF/Dossier Start.pdf" class="ligne" target="_blank">
                                    <div class="presentationprojet centrertext">
                                        PROJET CASH 1
                                        <br>
                                        <i class="fas fa-handshake"></i>
                                        <br>
                                        Construction d'un cahier des charges. Le but était 
                                        d'exprimer et de structurer les besoins d'une entreprise afin
                                        de maitriser son évolution future.                
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="PDF/Dossier Start.pdf" class="ligne" target="_blank">
                                    <div class="presentationprojet centrertext">
                                        PROJET CASH 2
                                        <br>
                                        <i class="fas fa-handshake"></i>
                                        <br>
                                        Réponse au cahier des charges. Le but était de
                                        structurer la réponse afin de proposer une solution
                                        adapté aux besoins de l'entreprise.
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="accueil.php" class="ligne" target="_blank">
                                    <div class="presentationprojet centrertext">
                                        PROJET PORTFOLIO
                                        <br>
                                        <i class="fas fa-file-code"></i>
                                        <br>
                                        Création d'un site internet afin de présenter l'ensemble 
                                        de ma formation et des projets menés durant ces deux
                                        années au CESI de Pau.
                                    </div>

                                </a>
                            </div>

                        </div>

                    </section>
                </div>
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
