<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.png">
    <title>Portfolio</title>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <main>

        <section id="portfolio-headrest">

            <h1>Portfolio</h1>

        </section>

        <section id="portfolio-content">

            <a href="portfolio/portefolio_comprendre.pdf" target="_blank" class="portfolio-content">
                <div class="portfolio-content-text">
                    <p>Portfolio</p>
                    <img class="icon" src="img/school.svg" alt="school">
                    <h4>Comprendre</h4>
                </div>

            </a>

            <a href="portfolio/portefolio_concevoir.pdf" target="_blank" class="portfolio-content">
                <div class="portfolio-content-text">
                    <p>Portfolio</p>
                    <img class="icon" src="img/handmade.svg" alt="handmade">
                    <h4>Concevoir</h4>
                </div>

            </a>

            <a href="portfolio/portefolio_exprimer.pdf" target="_blank" class="portfolio-content">
                <div class="portfolio-content-text">
                    <p>Portfolio</p>
                    <img class="icon" src="img/text.svg" alt="text">
                    <h4>Exprimer</h4>
                </div>

            </a>

            <a href="portfolio/portefolio_developper.pdf" target="_blank" class="portfolio-content">
                <div class="portfolio-content-text">
                    <p>Portfolio</p>
                    <img class="icon" src="img/data.svg" alt="data">
                    <h4>Développer</h4>
                </div>

            </a>

            <a href="portfolio/portefolio_entreprendre.pdf" target="_blank" class="portfolio-content">
                <div class="portfolio-content-text">
                    <p>Portfolio</p>
                    <img class="icon" src="img/folder.svg" alt="folder">
                    <h4>Entreprendre</h4>
                </div>

            </a>

        </section>
    </main>

    <?php
    include('footer.php');
    ?>
</body>

</html>