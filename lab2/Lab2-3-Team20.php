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
    <h1 class="title">Artwork Database</h1>
    <p class="description">Artwork Database is an online art inventory consisting of blah blah century art and type blah
        blah. Blah blah blah something about specifications museum blah blah.</p>

    <form method="post" action="processInput.php" class="card">
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

    <!-- still static, will make this dynamic later -->
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
            <!-- php? -->
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
            <!-- php -->
        </table>
    </main>

</body>

</html>