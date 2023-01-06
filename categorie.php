<?php



// Récupération de la clé API et du nom de la catégorie à partir de variables de session ou de formulaires
$api_key = "82090762746d73380adce7ba2fe7c4b0";
$category = "28";


//$category = $_POST['category'];

// Construction de l'URL de la requête
$url = "https://api.themoviedb.org/3/discover/movie?api_key=$api_key&with_genres=$category";

// Exécution de la requête et décodage du résultat
$result = file_get_contents($url);
$movies = json_decode($result, true);

// Parcours du tableau des films et affichage des informations souhaitées
foreach ($movies['results'] as $movie) {
    echo "<h3>" . $movie['title'] . "</h3>";
    echo "<p>" . $movie['overview'] . "</p>";
    echo "<img src='https://image.tmdb.org/t/p/w500" . $movie['poster_path'] . "' alt='Poster du film' />";
}


?>