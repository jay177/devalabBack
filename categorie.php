<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./dist/output.css">
  <script src="https://kit.fontawesome.com/23761b7654.js" crossorigin="anonymous"></script>
  <title>Home - TBM</title>
</head>
<body class="bg-[url('../img/bg.svg')] bg-cover bg-no-repeat text-white text-base m-0 p-0 box-border w-full">
<?php require_once('./src/components/header.php') ?>
	<form action="#" method="post" name="category" class="w-11/12 mx-auto my-7">
		<select name="category" class="bg-white bg-opacity-30 py-2 px-4 rounded-full text-black">
			<option class="bg-white bg-opacity-30">Sélectionner une catégorie</option>
			<option value="28" class="text-black">Action</option>
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

?>
<section class="w-11/12 flex flex-wrap mx-auto my-7">

<?php
foreach ($movies['results'] as $movie) {
	echo "<div class='max-w-xs w-[500px]'>";
    echo "<h3>" . $movie['title'] . "</h3>";
    
    echo "<img src='https://image.tmdb.org/t/p/w500" . $movie['poster_path'] . "' alt='Poster du film' />";
	echo "</div>";
}
?>
</section>


