

<?php
session_start();
$_SESSION['information'] = '';



if (count($_POST) == 0) {
    header('location: ../contact.php');
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

//$objet = $_POST['objet'];

$select = $_POST['select'];

$email = $_POST['email'];
$message = $_POST['message'];
$no_reply = 'no-reply@mmi-troyes.fr';
$email_dest = "mmi22d04@mmi-troyes.fr";




$affichage_retour = '';
$erreurs = 0;

if (!empty($_POST['nom'])) {
    $nom = $_POST['nom'];
} else {
    $affichage_retour = 'Le champ "Nom" est obligatoire !';
    $erreurs++;
}

if (!empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
} else {
    $affichage_retour .= 'Le champ "Prénom" est obligatoire !';
    $erreurs++;
}

if (!empty($_POST['select'])) {
    $select = $_POST['select'];
} else {
    $affichage_retour .= 'Veuillez selectionner un objet !';
    $erreurs++;
}

if (!empty($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $affichage_retour .= 'Adresse mail incorrecte !';
        $erreurs++;
    }
} else {
    $affichage_retour = 'Le champ "E-mail" est obligatoire !';
    $erreurs++;
}


if ($erreurs == 0) {

    $nom = ucfirst($nom);
    $prenom = ucfirst($prenom);

    $subject =  'HZ-website, ' . $prenom . ' ' . $nom . ' demande : ' . $select;
    $subject_confirm = 'Ne pas répondre à ce message.';
    // $mail_ok = 'Bonjour ' . $prenom . ' ' . $nom . ', ' . "\n" . "\n" . 'Nous avons bien reçu votre demande au sujet de : ' . $select . '. ' . "\n" . 'Nous vous répondrons dans les plus brefs délais !' . "\n" . "\n" . 'Cordialement,' . "\n" . 'Clément De Roberti';

    if ($select  == 'info') {
        $mail_ok = 'Bonjour ' . $prenom . ' ' . $nom . ', ' . "\n" . "\n" . 'Votre demande d\'information a bien été prise en compte. ' . "\n" . "\n" . 'Cordialement,' . "\n" . 'Clément De Roberti';
    } elseif ($select  == 'devis') {
        $mail_ok = 'Bonjour ' . $prenom . ' ' . $nom . ', ' . "\n" . "\n" . 'Votre demande de devis a été transmise. ' . "\n" . "\n" . 'Cordialement,' . "\n" . 'Clément De Roberti';
    } elseif ($select  == 'reclam') {
        $mail_ok = 'Bonjour ' . $prenom . ' ' . $nom . ', ' . "\n" . "\n" . 'Votre réclamation sera traitée dans les meilleurs délais. ' . "\n" . "\n" . 'Cordialement,' . "\n" . 'Clément De Roberti';
    }


    $headers['From'] = $email;
    $headers['Reply-to'] = $email;
    $headers['X-Mailer'] = 'PHP/' . phpversion();

    if (mail($email_dest, $subject, $message, $headers)) {
        $erreurs = 0;
    } else {
        $erreurs++;
    }

    $headers1['From'] = "mmi22d04@mmi-troyes.fr";
    $headers1['Reply-to'] = $no_reply;
    $headers1['X-Mailer'] = 'PHP/' . phpversion();

    if (mail($email, $subject_confirm, $mail_ok, $headers1)) {
        $erreurs = 0;
    } else {
        $erreurs++;
    }

    $affichage_retour = 'Votre demande à bien été envoyé';
    echo $affichage_retour;


    if ($erreurs != 0) {
        $affichage_retour = 'Echec de l\'envoi du message';
        echo $affichage_retour;
    }
}
$_SESSION['information'] = $affichage_retour;
header('location: ../contact.php');


?>