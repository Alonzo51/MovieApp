var movieGenreInput = document.getElementById('movie-genres');
var genreRequestButton = document.getElementById('genre-request');
var currentMovie = -1;

genreRequestButton.addEventListener('click', requestSuggestedMovie);
movieGenreInput.addEventListener('change', requestSuggestedMovie);

function requestSuggestedMovie()
{
    var genreId = movieGenreInput.value;
    var data = new FormData();

    data.append( "currentMovie", JSON.stringify( currentMovie ) );

    fetch(`/api/${genreId}/GetRandomMovieFromGenre`, {
        method: "POST",
        body: data
    })
    .then(function(response) {
        return response.text();
    })
    .then(function(htmlResponse) {
        document.getElementById('movie-data').innerHTML = htmlResponse;

        currentMovie = document.getElementById('movie-id').value;
        apiMovieId = document.getElementById('movie-api-id').value;

        // get rating
        fetch(`https://api.themoviedb.org/3/movie/${apiMovieId}?api_key=8529964e38acfa7c5daf736162a1f441`)
        .then(function(response) {
            return response.json();
        })
        .then(function(jsonResponse) {
            document.getElementById('movie-rating').innerHTML = `${jsonResponse['vote_average']}<img src="https://img.icons8.com/ios-glyphs/30/ffffff/star--v2.png"/> <span class="float-end">${jsonResponse['vote_count']} <img src="https://img.icons8.com/external-victoruler-outline-victoruler/64/ffffff/external-person-logistics-victoruler-outline-victoruler.png" /></span>`;
            document.getElementById('movie-overview').innerHTML = jsonResponse['overview'];
        });
    });
}
