<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Empfangen der Formulardaten
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // E-Mail-Adresse, an die die Formulardaten gesendet werden sollen
    $zieladresse = "hello@fastnathan.com";

    // Betreff der E-Mail
    $betreff = "Neue Kontaktanfrage von $name";

    // E-Mail-Inhalt
    $nachricht = "Name: $name\n";
    $nachricht .= "E-Mail: $email\n";
    $nachricht .= "Nachricht:\n$message";

    // E-Mail versenden
    mail($zieladresse, $betreff, $nachricht);

    // Weiterleitung oder Bestätigungsseite, je nach Bedarf
    header("Location: index.html");
    exit();
}
?>
