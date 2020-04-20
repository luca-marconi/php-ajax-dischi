$(document).ready(function () {

    var source = $("#card-template").html();
    var template = Handlebars.compile(source);


    $.ajax( {
        url: 'server.php',
        method: 'GET',
        success: function (data) {
            console.log(data);
            var albums = data;
            for (var i = 0; i < albums.length; i++) {
                var album = albums[i];
                var cardTemplate = {
                    cover: album.cover,
                    titolo: album.title,
                    autore: album.author,
                    anno: album.year
                }
                var cardCompilata = template(cardTemplate);
                $('.container-cards').append(cardCompilata);
            }
        },
        error: function (error) {
            console.log('Errore');
        }
    })










});
