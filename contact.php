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

    <body id="imagecontact">

        <div class="container">

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

            <div>
                <h1 id="titrecontact">Formulaire de contact</h1>

                <hr id="trait"> 

            </div>

            <section id="contact">
                <form id="contactForm" action="formValidation.php" method='POST' class="needs-validation" novalidate>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2 margin">
                            <input class="form-control" name="nom" type="text" placeholder="Nom*" required="required" pattern='[a-zA-Z\a]{1,}'>                      
                            <div class="invalid-feedback">
                                Merci de renseigner votre nom.
                            </div>
                        </div>
                    </div>                   

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" name="mail" type="email" placeholder="Adresse Mail*" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">                           
                            <div class="invalid-feedback">
                                Merci de renseigner une adresse mail valide.
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <input class="form-control" name="telephone" type="tel" placeholder="Votre numéro*" required="required">
                            <div class="invalid-feedback">
                                Merci de renseigner un numéro de téléphone.
                            </div>                            
                        </div>
                    </div>

                    <br>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message*" required="required"></textarea>
                            <div class="invalid-feedback">
                                Merci de laisser un message
                            </div>
                        </div>
                    </div>

                    <div id="success"></div>                   
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl boutonenvoie" id="sendMessageButton">Envoyer</button>
                    </div> 

                </form>           
            </section>
        </div>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </body>
</html>

