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

        <div class="container">
            <h1 id="titre">TECHNICIEN SUPERIEUR EN INFORMATIQUE</h1>

            <hr id="trait"> 

            <div class="centrertext">
                Bonjour, je m'appelle 
                <span class="couleurnom">Bastien HIEU</span> 
                <br>
                <br>
                Dans le cadre de mes études au CESI, j’ai été amené à créer un portfolio 
                afin de présenter mon parcours professionnel et les différents projets menés au sein du CESI.
                <br>               
                <br>
                Vous avez la possibilité de retrouver mon profil sur LinkedIn ou de visionner mon CV.

            </div>

            <div id="bouton">
                <a href="https://www.linkedin.com/in/bastien-hieu-6bb2895a/" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="PDF/CV info.pdf" target="_blank">
                    <i class="far fa-file-pdf"></i>
                </a>
            </div>
        </article>
    </div>

</body>
</html>
