<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="img/favicon.png">
    <title>Accueil</title>
</head>

<body>

    <?php
    include('header.php');
    ?>

    <main>

        <section id="hero">
            <div id="hero-content">
                <div id="hero-text">
                    <h1>Clément De Roberti</h1>
                    <h5>Vidéaste / Graphiste Junior</h5>
                    <div><a href="https://www.behance.net/clementdr" target="_blank"><img src="img/Behance-min.png" alt="behance"> </a>
                        <a href="https://dribbble.com/clementdr" target="_blank"><img src="img/Dribbble-min.png" alt="dribbble"> </a>
                        <a href="https://instagram.com/clement.dr" target="_blank"><img src="img/Instagram-min.png" alt="instagram"> </a>
                        <a href="https://fr.linkedin.com/in/cl%C3%A9ment-de-roberti-8935081a2" target="_blank"><img src="img/LinkedIn-min.png" alt="linkedin"> </a>
                        <a href="https://www.youtube.com/channel/UC2gFaIroKHKrgIeyJ9mIZgw" target="_blank"><img src="img/Youtube-min.png" alt="youtube"> </a>
                    </div>
                </div>
                <a href="#presentation-section"> <img src="img/clement_crop.jpg" alt="photo-clement" id="photo-clement">
                </a>
            </div>
            <div id="buttons">
                <a href="#presentation-section">À propos</a>
                <a href="book.php">Book</a>
            </div>

        </section>

        <section id="presentation-section">
            <div id="presentation-section-text">
                <h1>Qui suis-je ?</h1>
                <p>Natif de Chambéry et actuellement étudiant en BUT Métiers du
                    Multimédia et de l'Internet à l'IUT de Troyes, je suis depuis
                    toujours passionné d'audiovisuel et de graphisme. Depuis plusieurs
                    années maintenant, je me forme aux métiers de la création numérique
                    et de la communication dans un cadre scolaire mais aussi personnel.
                    Je mène à bien des projets divers et variés tels que la création
                    d'affiches aussi bien décoratives que professionelles ou la publication
                    de vidéos autour de sujets différents. Vous pourrez retrouver toutes
                    mes créations via les différents liens présents sur ce site.</p>
            </div>

            <div id="presentation-section-btn">
                <a href="book.php">Voir mes projets</a>

            </div>
        </section>

    </main>

    <?php
    include('footer.php');
    ?>

</body>

</html>