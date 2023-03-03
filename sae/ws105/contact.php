<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Contact - Hans Zimmer</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="icon" href="images/favicon.png">
</head>

<body>
  <?php
  require('header.php');
  ?>

  <main>
    <section id="pres_zimmer_stu">
      <div id="text_stu">
        <h1 id="tit_stu">Contact</h1>
        <p id="baseline_stu">Contactez-moi via ce formulaire</p>
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


    <div id="contact">
      <div id="contact_2">
        <label id="label_en_tete">Contactez-moi :</label>
        <form method="POST" action="traitements/envoi_mail.php" name="contact_form" id="contact_form">
          <div id="en_tete">
            <div>
              <label for="nom">Nom : <span>*</span></label>
              <input id="nom" type="text" class="champ" name="nom" placeholder="Nom" required>
            </div>
            <div>
              <label for="prenom">Prénom : <span>*</span></label>
              <input id="prenom" type="text" class="champ" name="prenom" placeholder="Prénom" required>
            </div>
          </div>
          <div id="contact_mess">
            <div id="contact_mail">
              <label for="email">Adresse mail : <span>*</span></label>
              <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>
            <!--<div id="contact_obj">
              <label for="email">Objet :</label>
              <input type="text" id="objet" name="objet" placeholder="Objet" />
            </div> -->
            <label>Objet de la demande : <span>*</span></label>
            <div id="contact_dem">
              <div class="choice">
                <input id="information" type="radio" name="select" value="info">
                <label for="information">Information</label>
              </div>
              <div class="choice">
                <input id="devis" type="radio" name="select" value="devis">
                <label for="devis">Demande de devis</label>
              </div>
              <div class="choice">
                <input id="reclam" type="radio" name="select" value="reclam">
                <label for="reclam">Réclamation</label>
              </div>

            </div>

            <div>

              <label for="message">Message : <span>*</span></label>
              <textarea name="message" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
            </div>
          </div>

          <input type="submit" value="Envoyer" id="submit">
        </form>
      </div>
      <img src="images/clement.jpg" alt="clement_contact_photo" id="clement_contact_photo">
    </div>


  </main>

  <?php
  require('footer.php');
  ?>
</body>

</html>