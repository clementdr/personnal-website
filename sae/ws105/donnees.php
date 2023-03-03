<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Données - Hans Zimmer</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="icon" href="images/favicon.png">
</head>

<body>
    <?php
    require('header.php');
    ?>

    <main>
        <section id="pres_zimmer_disco">
            <div id="text_dis">
                <h1 id="tit_disco">Discographie</h1>
                <p id="baseline_disco">Un artiste ancré dans l'histoire</p>
            </div>
        </section>

        <div>
            <table id="data_table">
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>Titre</td>
                        <td>Réalisateur</td>
                        <td>Genre</td>
                        <td>Durée (min)</td>
                    </tr>

                </thead>

                <tbody>
                    <?php
                    $fichier = 'datas/database_zimmer.json';
                    $tabDiscoZimJSON = file_get_contents($fichier);
                    $tabDiscoZimPHP = json_decode($tabDiscoZimJSON, true);

                    foreach ($tabDiscoZimPHP as $disco) {
                        echo '<tr>';
                        echo '<td>';
                        echo $disco['date'];
                        echo '</td>';
                        echo '<td>';
                        echo $disco['titre'];
                        echo '</td>';
                        echo '<td>';
                        echo $disco['réalisateur'];
                        echo '</td>';
                        echo '<td>';
                        echo $disco['genre'];
                        echo '</td>';
                        echo '<td>';
                        echo $disco['durée'];
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </main>

    <?php
    require('footer.php');
    ?>

    <script src="http://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="http://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data_table').DataTable();
        });
    </script>
    <script>
        $('#data_table').DataTable({
            language: {
                url: 'http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json'
            }
        });
    </script>
</body>

</html>