<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mémorisation des informations du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de réception
    $destinataire = "fauquembergueyann@gmail.com";

    // Sujet du mail
    $sujet = "Contact de la part de $nom";

    // Corps du mail
    $corpsMessage = "Nom: $nom\n";
    $corpsMessage .= "Email: $email\n\n";
    $corpsMessage .= "Message:\n$message";

    // En-têtes du mail
    $headers = "De: $email";

    // Envoi du mail
    mail($destinataire, $sujet, $corpsMessage, $headers);

    // Redirection vers une page de confirmation
    header("Location: submitted.html");
} else {
    // Redirection en cas d'accès direct au script sans soumission de formulaire
    header("Location: index.html");
}

?>
