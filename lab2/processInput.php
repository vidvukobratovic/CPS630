<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork Database</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Libre+Baskerville:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="Lab-2-3-Team20.css">
</head>

<body>
<h1 class="title">Artwork Database</h1>
    <p class="description">Artwork Database is an online art inventory consisting of blah blah century art and type blah
        blah. Blah blah blah something about specifications museum blah blah.</p>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artist = $_POST['artist'];
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $type = $_POST['type'];
    $specification = $_POST['specification'];
    $year = $_POST['year'];
    $museum = $_POST['museum'];
  }
?>

<main class="records card">
    <table>
        <tr>
            <th>Artist</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Type</th>
            <th>Specification</th>
            <th>Year</th>
            <th>Museum</th>
        </tr>
        <tr>
            <td>Marcel Duchamp</td>
            <td>Fountain</td>
            <td>Dada</td>
            <td>Sculpture</td>
            <td>Non-Commercial</td>
            <td>1930</td>
            <td>Kunsthaus Zürich</td>
        </tr>
        <tr>
            <td>René Magritte</td>
            <td>The Treachery of Images</td>
            <td>Surrealism</td>
            <td>Other</td>
            <td>Non-Commercial</td>
            <td>1929</td>
            <td>Los Angeles County Museum of Art</td>
        </tr>
        <tr>
        <?php
            echo "<td>$artist</td>
            <td>$title</td>
            <td>$genre</td>
            <td>$type</td>
            <td>$specification</td>
            <td>$year</td>
            <td>$museum</td> "
        ?>
        </tr>
    </table>
</main>
</body>