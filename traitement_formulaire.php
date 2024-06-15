<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Ici, vous pouvez écrire le code pour enregistrer ces données ou les envoyer par email, etc.
    // Par exemple, pour envoyer un email :
    $to = 'alaehaddad205@gmail.com'; // Remplacez par votre adresse email
    $subject = 'Nouveau message du formulaire de contact';
    $headers = "From: " . $email;
    mail($to, $subject, $message, $headers);
    
    // Stocker le message de succès dans une variable de session
    $_SESSION['success_message'] = 'Votre message a été envoyé avec succès !';
    
    // Redirection vers la page de contact
    header('Location: index.html');
    exit();
}
?>
