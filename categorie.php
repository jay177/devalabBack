<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="#" method="post" name="category">
    
    <select name="category">
        <option>Sélectionner une catégorie</option>
        <option value="28">Action</option>
        <option value="12">aventure</option>
        <option value="16">Animation</option>    
        <option value="80">Crime</option>
        <option value="35">Comedy</option>
        <option value="18">Drama</option>
        <option value="10751">Family</option>
        <option value="14">Fantasy</option>
        <option value="36">History</option>
        <option value="27">Horror</option>
        <option value="10402">Music</option>
        <option value="9648">Mystery</option>
        <option value="10749">Romance</option>
        <option value="878">Science Fiction</option>
        <option value="10770">TV Movie</option>
        <option value="53">Thriller</option>
        <option value="10752">War</option>
        <option value="37">Western</option>
        <option value="99">Documentary</option>
    </select>
    <input type="submit" value="Valider" />
</form>
</body>
</html>


<?php



// Récupération de la clé API et du nom de la catégorie à partir de variables de session ou de formulaires
$api_key = "82090762746d73380adce7ba2fe7c4b0";



$category = $_POST['category'];


$url = "https://api.themoviedb.org/3/discover/movie?api_key=$api_key&with_genres=$category";


$result = file_get_contents($url);
$movies = json_decode($result, true);


foreach ($movies['results'] as $movie) {
    echo "<h3>" . $movie['title'] . "</h3>";
    echo "<p>" . $movie['overview'] . "</p>";
    echo "<img src='https://image.tmdb.org/t/p/w500" . $movie['poster_path'] . "' alt='Poster du film' />";
}


?>

