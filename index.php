<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $destinataire = "emmanuelibanez61@gmail.com";

    
    $sujet = "Nouveau message de $nom $Prénom";

    
    $corps_message = "Nom : $nom\n";
    $corps_message .= "Email : $email\n";
    $corps_message .= "Message :\n$message";

    
    $headers = "De: $nom";

    /
    mail($destinataire, $sujet, $corps_message, $headers);

    header("Location: index.html?message=envoye");
    exit(); 
}
?>
