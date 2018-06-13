<?php

//Sujet du mail
$sujet = "Mon formulaire de contact";

//Elements du formulaire
$formNom = $_POST["nom"];
$formTelephone = $_POST["telephone"];
$formEmail = $_POST["mail"];
$formMessage = $_POST["message"];

//Construction du message
$html_message = "<div>".$formNom."</div>";
$html_message .= "<div>".$formEmail."</div>";
$html_message .= "<div>".$formTelephone."</div>";
$html_message .= "<div>".$formMessage."</div>";

$monMail = "hieu.bastien@gmail.com";//ici l'adresse mail du compte de l'expéditeur
$monMotDePasse = "";//le mdp Gmail du compte mail

//Envoi du mail
include 'phpmailer_config.php';