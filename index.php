<?php

session_start();

require_once './Class/Connection.php';
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

  <div class="flex flex-col text-center items-center py-9 border-b-2 border-sky-400">
      <h2 class="font-bold text-3xl tracking-wide underline decoration-sky-400">Find everything you wish for !</h2>
      <p class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsum quidem eum molestiae cupiditate, harum eos ducimus neque enim fuga.</p>

      <?php if (isset($_SESSION['name'])): ?>
        <h3>Welcome <?= $_SESSION['name'] ?> </h3>
      <?php endif; ?>
    </div>
  <section class="w-11/12 mx-auto my-7">
    

    <div class="my-6">
      <div class="flex justify-between items-center">
        <h3 class="font-semibold tracking-wide text-lg">Popular Movies</h3>
      </div>
      <div class="flex gap-6 mt-5 overflow-x-auto" id="topMovies">
      </div>
    </div>

    <div class="my-6">
      <div class="flex justify-between items-center">
        <h3 class="font-semibold tracking-wide text-lg">Top Rated</h3>
      </div>
      <div class="flex gap-6 mt-5 overflow-x-auto" id="topRated">
      </div>
    </div>
  </section>
  <script src="https://kit.fontawesome.com/23761b7654.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="script.js"></script>
  <script>
    getTopMovies();
    getTopRated();
  </script>
  
</body>
</html>