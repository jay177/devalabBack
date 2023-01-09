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
  <title>Black Panther - TBM</title>
  
</head>
<body class="bg-[url('../img/bg.svg')] bg-cover bg-no-repeat text-white text-base m-0 p-0 box-border w-full">
<?php require_once('./src/components/header.php') ?>


  <section class="w-11/12 mx-auto my-7">
    
    <!-- About -->
    <div class="flex-col md:flex-row w-full relative py-5 md:px-10 border-b-2 my-5 flex gap-8" id="container">
    </div>
    
  </section>
  
  <script src="https://kit.fontawesome.com/23761b7654.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="script.js"></script>
  <script>
    moviePage();
  </script>
</body>
</html>