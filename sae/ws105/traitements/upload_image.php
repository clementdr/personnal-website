<?php
session_start();
$_SESSION['information'] = '';

if (!empty($_FILES)) {
    $image_nom = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_taille = $_FILES['image']['size'];
    $image_temporaire = $_FILES['image']['tmp_name'];
    $image_error = $_FILES['image']['error'];
} else {
    echo 'Vous devez sélectionner un fichier';
}



$affichage_erreurs = '';
$erreurs = 0;

if ($image_error == 0) {
    if ($image_type != 'image/jpeg') {
        $affichage_erreurs = 'Le fichier n\'est pas au format jpeg ou extension invalide <br>';
        $erreurs++;
    }

    if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
        $affichage_erreurs .= 'Ce fichier n\'est pas une image jpeg <br>';
        $erreurs++;
    }

    if ($image_taille > 500000) {
        $affichage_erreurs .= 'Veuillez choisir un fichier inferieur à 500ko';
        $erreurs++;
    }
} else {
    $affichage_erreurs = 'Impossible de télécharger le fichier, erreur de sélection';
}

if ($erreurs != 0) {
    echo $affichage_erreurs;
} else {
    echo 'Fichier conforme';
}


if ($erreurs == 0) {
    $nbFichiers = -2;
    $dossier = opendir("../images/galerie");
    while ($fichier = readdir($dossier)) {
        $nbFichiers++;
    }

    $image_num = $nbFichiers + 1;
    $image_nom = 'image' . $image_num . '.jpg';

    $destination = "../images/galerie/" . $image_nom;

    if (move_uploaded_file($image_temporaire, $destination)) {
        $erreurs = 0;
    } else {
        $affichage_erreurs = 'Erreur de téléchargement<br>';
        $erreurs++;
    }
}

if ($erreurs != 0) {
    echo $affichage_erreurs;
} else {
    echo 'Téléchargement terminé avec succès<br>';
}

$_SESSION['information'] = $affichage_erreurs;
header('location: ../galerie.php');
