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
                <?php
                    include 'data.php';
                ?>

                <?php foreach ($albums as $key => $album) { ?>
                    <div class="card">
                        <div class="image">
                            <img src="<?php echo $album['cover'] ?>" alt="">
                        </div>
                        <div class="info">
                            <h2> <?php echo $album['title'] ?> </h2>
                            <p> <?php echo $album['author'] ?> </p>
                            <small> <?php echo $album['year'] ?> </small>
                        </div>
                    </div>


                <?php } ?>


            </div>

        </main>

    <script src="dist/js/app.js" charset="utf-8"></script>

    </body>
</html>
