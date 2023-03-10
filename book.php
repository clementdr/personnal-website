<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.png">
    <title>Book</title>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <main>

        <section id="book-headrest">


            <h1>Book</h1>

            <div id="buttons">
                <a href="#book-content-audiovisuel">Audiovisuel</a>
                <a href="#book-content-photographie">Photographie</a>
                <a href="#book-content-infographie">Infographie</a>
            </div>

        </section>

        <section id="book-content-audiovisuel">
            <div class="book-content-img">
                <iframe class="video" src="https://www.youtube.com/embed/KBRwRPB7n6I" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                <iframe class="video" src="https://www.youtube.com/embed/F3gnXBOPeyM" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                <iframe class="video" src="https://www.youtube.com/embed/ndx8BRg_GbE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

            <div class="book-content-btn">
                <a href="https://www.youtube.com/channel/UC2gFaIroKHKrgIeyJ9mIZgw" target="_blank" class="book-content-link">
                    <div class="book-content-link-text">
                        <p>Audiovisuel</p>
                        <img class="icon" src="img/Youtube-min.png" alt="youtube">
                        <h4>Youtube</h4>
                    </div>

                </a>
            </div>



        </section>

        <section id="book-content-photographie">

            <div class="book-content-img">
                <img src="img/eiffel.jpg" alt="eiffel">
                <img src="img/renault.jpg" alt="renault">
                <img src="img/classg.jpg" alt="classg">

            </div>

            <div class="book-content-btn">
                <a href="https://instagram.com/clement.dr" target="_blank" class="book-content-link">
                    <div class="book-content-link-text">
                        <p>Photographie</p>
                        <img class="icon" src="img/Instagram-min.png" alt="instagram">
                        <h4>Instagram</h4>
                    </div>

                </a>
                <a href="https://cderoberti1.wixsite.com/clementderoberti" target="_blank" class="book-content-link">
                    <div class="book-content-link-text">
                        <p>Photographie</p>
                        <img class="icon" src="img/wix.png" alt="wix">
                        <h4>Wix</h4>
                    </div>

                </a>
            </div>

        </section>


        <section id="book-content-infographie">

            <div class="book-content-img">
                <img src="img/atelier_tattoo_shop_2.0.jpg" alt="atelier">
                <img src="img/iceCream.jpg" alt="icecream">
                <img src="img/moodboard_3.png" alt="moodboard">

            </div>

            <div class="book-content-btn">
                <a href="https://www.behance.net/clementdr" target="_blank" class="book-content-link">
                    <div class="book-content-link-text">
                        <p>Infographie</p>
                        <img class="icon" src="img/Behance-min.png" alt="behance">
                        <h4>Behance</h4>
                    </div>

                </a>

                <a href="https://dribbble.com/clementdr" target="_blank" class="book-content-link">
                    <div class="book-content-link-text">
                        <p>Infographie</p>
                        <img class="icon" src="img/Dribbble-min.png" alt="dribbble">
                        <h4>Dribbble</h4>
                    </div>

                </a>

            </div>



        </section>
    </main>

    <?php
    include('footer.php');
    ?>
</body>

</html>