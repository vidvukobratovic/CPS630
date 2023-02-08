<!DOCTYPE HTML>

<!DOCTYPE html>
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

    <?php
        $index = 0;
        $artworks = array();
        $artworks[$index] = array("artist" => "Marcel Duchamp", "title" => "Fountain", "genre" => "Dada", "type" => "Sculpture",
         "specification" => "Non-Commercial", "year" => 1930, "museum" => "Kunsthaus Zürich");
        $index++;
        $artworks[$index] = array("artist" => "René Magritte", "title" => "The Treachery of Images", "genre" => "Surrealism", 
        "type" => "Other", "specification" => "Non-Commercial", "year" => 1929, "museum" => "Los Angeles County Museum of Art");
        $index++;
    ?>

    <h1 class="title">Artwork Database</h1>
    <p class="description">Artwork Database is an online art inventory about various works of art, including but not limited to paintings, sculptures, photographs, and installations. This information can include details about the artist, the title of the work, the date it was created, the medium used, and other relevant information. It is used by art historians, researchers, curators, and enthusiasts to learn more about specific works of art and the artists who created them.</p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="card">
        <div class="inputs">
            <div>
                Artist: <input type="text" name="artist">
            </div>
            <div>
                Title: <input type="text" name="title">
        </div>
        <div>
            <label for="genre">Genre: </label>
            <select name="genre" id="genre">
                <option value="" disabled selected hidden>Select genre</option>
                <option value="abstract">Abstract</option>
                <option value="baroque">Baroque</option>
                <option value="dada">Dada</option>
                <option value="gothic">Gothic</option>
                <option value="renaissance">Renaissance</option>
                <option value="surrealism">Surrealism</option>
            </select>
        </div>

        <div>
            <label for="type">Type: </label>
            <select name="type" id="type">
                    <option value="" disabled selected hidden>Select type</option>
                    <option value="architecture">Architecture</option>
                    <optgroup label="Painting">
                        <option value="landscape">Landscape</option>
                        <option value="portrait">Portrait</option>
                    </optgroup>
                    <option value="sculpture">Sculpture</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div>
                <label for="specification">Specification: </label>
                <select name="specification" id="specification">
                    <option value="" disabled selected hidden>Select specification</option>
                    <option name="commercial" id="commercial">Commercial</option>
                    <option name="noncommercial" id="noncommercial">Non-Commercial</option>
                    <option name="derivative" id="derivative">Derivative Work</option>
                    <option name="nonderivative" id="nonderivative">Non-Derivative Work</option>
                </select>
            </div>
            
        <div>
            Year: <input type="text" name="year">
        </div>

        <div>
            Museum: <input type="text" name="museum">
        </div>

    </div>
    <div class="buttons">
        <button type="submit">Save Record</button>
        <button type="reset">Clear Record</button>
    </div>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $artist = $_POST['artist'];
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $type = $_POST['type'];
        $specification = $_POST['specification'];
        $year = $_POST['year'];
        $museum = $_POST['museum'];
        $artworks[$index] = array("artist" => $artist, "title" => $title, "genre" => $genre, 
        "type" => $type, "specification" => $specification, "year" => $year, "museum" => $museum);
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
            <?php
        $i = 0;

        while($i < count($artworks))
        {
            echo "<tr>";
            echo "<td>" . $artworks[$i]['artist'] . "</td>";
            echo "<td>" . $artworks[$i]['title'] . "</td>";
            echo "<td>" . $artworks[$i]['genre'] . "</td>";
            echo "<td>" . $artworks[$i]['type'] . "</td>";
            echo "<td>" . $artworks[$i]['specification'] . "</td>";
            echo "<td>" . $artworks[$i]['year'] . "</td>";
            echo "<td>" . $artworks[$i]['museum'] . "</td>";
            echo "</tr>";
            $i++;
        }
        ?>
        </table>
    </main>
    
</body>

</html>