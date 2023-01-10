<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Browse Your Favourite Movie</title>
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">-->
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->

    <link rel="stylesheet" href="./dist/output.css">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-[url('../img/bg.svg')] bg-cover bg-no-repeat text-white text-base m-0 p-0 box-border w-full">
<?php require_once('./src/components/header.php') ?>

  <div class="w-11/12 mx-auto my-7">
    <div class="w-full">
      <form id="searchForm" class="w-full">
        <input type="text" class="searchBox outline-none py-3 px-6 rounded-full w-full bg-opacity-30 bg-white" placeholder="Search Movies here" id="searchText">
      </form>
		</div>

    <div class="my-7">
      <div id="movies" class="row flex flex-wrap justify-between"></div>
    </div>
  </div>

  

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/23761b7654.js" crossorigin="anonymous"></script>
</body>
</html>