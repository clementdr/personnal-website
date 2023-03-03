<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Galerie - Hans Zimmer</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" href="images/favicon.png">
</head>

<body>
  <?php
  require('header.php');
  ?>

  <main>
    <section id="pres_zimmer">
      <div id="text_gal">
        <h1 id="tit_orch">Galerie</h1>
        <p id="baseline_orch">Des tournées dans le monde entier</p>
      </div>
    </section>

    <div id="envoie_message">
      <?php
      if (isset($_SESSION['information'])) {
        echo '<p>' . $_SESSION['information'] . '</p>' . "\n";
        session_unset();
      }
      ?>
    </div>

    <div id="upload_images">
      <form id="form_upload" action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
        <label for="file">Choisir un fichier</label>
        <input type="file" name="image" id="file">
        <input id="download" type="submit" value="Télécharger">
      </form>
    </div>

    <?php
    $nbFichiers = -2;
    $dossier = opendir("images/galerie");
    while ($fichier = readdir($dossier)) {
      $nbFichiers++;
    }
    ?>
    <div id="galerie">
      <?php
      $i = 1;
      while ($i <= $nbFichiers) {
        echo '<img class="galerie_img" src="images/galerie/image' . $i . '.jpg" alt="image' . $i . '.jpg">';
        $i++;
      }
      ?>
    </div>


  </main>

  <?php
  require('footer.php');
  ?>
</body>

</html>