<?php // Fichier permettant d'envoyer un mail à l'adresse de Yann avec les bonnes informations

// On vérifie qu'un formulaire a été soumis en accédant à cette page
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mémorisation des informations du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail cible
    $to = "fauquembergueyann@gmail.com";

    // Sujet du mail
    $sujet = "Contact de la part de $nom";

    // Corps du mail
    $msg = "Nom: $nom\n";
    $msg .= "Email: $email\n\n";
    $msg .= "Message:\n$message";

    // En-tête du mail
    $header = "De: $email";

    // Envoi du mail
    mail($to, $sujet, $msg, $header);

    // Redirection vers la page de confirmation
    header("Location: submitted.html");
} 
else 
{
    // Redirection vers l'accueil si on accède à cette page sans soumettre un formulaire
    header("Location: index.html");
}

?>
