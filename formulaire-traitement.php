<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des champs requis
    if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["email"]) || empty($_POST["telephone"]) || empty($_POST["sujet"]) || empty($_POST["message"])) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    // Vérification du format de l'e-mail
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Veuillez saisir une adresse e-mail valide.";
        exit;
    }

    // Traitement du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    // Envoyer le message par e-mail, enregistrement en base de données, etc.

    // Afficher le message de confirmation
    echo 'Merci, .$prenom $nom, pour votre message.';
    echo 'Nous avons bien reçu votre demande concernant le sujet : ' $sujet ;

    ?>