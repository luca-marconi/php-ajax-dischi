<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <header>
            <div class="nav">
                <div id="logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="logo Spotify">
                </div>
            </div>
        </header>
        <main>

            <div class="container-cards">

            </div>

        </main>

    <script id="card-template" type="text/x-handlebars-template">
        <div class="card">
            <div class="image">
                <img src="{{cover}}" alt="cover">
            </div>
            <div class="info">
                <h2>{{titolo}}</h2>
                <p>{{autore}}</p>
                <small>{{anno}}</small>
            </div>
        </div>
    </script>

    <script src="dist/js/app.js" charset="utf-8"></script>

    </body>
</html>
