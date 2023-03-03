<div id="haut_de_page"></div>
<header>
    <a href="index.php"><img src="images/zimmer_signature_b.png" alt="logo" id="logo_header"></a>
    <nav>
        <?php $page = $_SERVER['PHP_SELF']; ?>
        <ul>
            <li <?php if (strpos($page, 'index.php')) echo ' class="active"'; ?>><a href="index.php">Accueil</a></li>
            <li <?php if (strpos($page, 'donnees.php')) echo ' class="active"'; ?>><a href="donnees.php">Données</a></li>
            <li <?php if (strpos($page, 'galerie.php')) echo ' class="active"'; ?>><a href="galerie.php">Galerie</a></li>
            <li <?php if (strpos($page, 'contact.php')) echo ' class="active"'; ?>><a href="contact.php">Contact</a></li>
            <li <?php if (strpos($page, 'partenaires.php')) echo ' class="active"'; ?>><a href="partenaires.php">Partenaires</a></li>
        </ul>
    </nav>
</header>