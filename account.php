<?php


session_start();

require_once './Class/Connection.php';

if (!isset($_SESSION['name'])){
  header('Location: index.php');
}

$connection = new Connection();
$result = $connection->selectUser($_SESSION['mail']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./dist/output.css">
  <script src="https://kit.fontawesome.com/23761b7654.js" crossorigin="anonymous"></script>
  <title>Account - TBM</title>
</head>
<body class="bg-[url('../img/bg.svg')] bg-cover bg-no-repeat text-white text-base m-0 p-0 box-border w-full h-full">
<?php require_once('./src/components/header.php') ?>
  
  
  <section class="w-11/12 m-auto my-28">
    <div class=" flex flex-col md:flex-row items-center gap-9">
      
      <img src="img/profile.png" alt="" class="w-56 rounded-[50%] border-2 border-sky-400">
      
      <div>
        <h2 class="text-2xl"><?= $result['first_name'] ?> <span class="uppercase"><?= $result['last_name'] ?></span></h2>
        <p class="mt-10">
          Bio : 
          <br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. At ullam animi magnam rerum facere eos libero, maxime ex reprehenderit nobis optio quae hic atque? Amet tempora beatae accusantium ullam aperiam magnam et placeat praesentium tenetur itaque repudiandae quisquam quibusdam necessitatibus assumenda inventore quidem mollitia sint similique numquam ratione, sunt nulla.
        </p>
      </div>
    </div>
  </section>
  <div class="hidden w-full h-full fixed z-10 left-0 top-0 overflow-auto bg-black bg-opacity-40 modal-form">
    <div class="relative p-5 my-[15%] mx-auto w-[40%] bg-sky-800 rounded-3xl">
      <i class="fa-solid fa-xmark absolute right-4 cursor-pointer modal-close"></i>
      <form action="" >
        <h3 class="text-xl uppercase underline pb-5">Create a new album</h3>
        <div class="gap-4 flex">
          <input type="text" name="name" id="name" placeholder="Name" class="bg-sky-800 rounded-[10px] py-2 px-4 border-sky-400 border-2 outline-none">
          <input type="submit" value="Create" class="cursor-pointer bg-sky-400 py-2 px-4 rounded-lg">
        </div>
        
      </form>
    </div>
    
  </div>

  <div class="w-11/12 m-auto">
    <div class="pb-[5px]">
      <h2 class="text-2xl font-semibold">Albums</h2>
    </div>
    <hr>
  </div>

  

  <section class="w-11/12 justify-center md:justify-start m-auto my-10 flex flex-wrap gap-5">
    <div class="w-full md:w-1/5 h-[50vh] rounded-[30px] bg-[url('/img/black-panther.webp')] bg-cover bg-center flex items-end overflow-hidden">
      <div class="pl-5 pb-5 bg-white bg-opacity-30 w-full">
        <p class="uppercase font-semibold">Seen</p>
        <p>15 films</p>
      </div>
    </div>
    <div class="w-full md:w-1/5 h-[50vh] rounded-[30px] bg-white bg-opacity-30 flex items-center justify-center cursor-pointer modal-open">
      <i class="fa-solid fa-circle-plus text-3xl"></i>
    </div>
  </section>
  <script src="script.js"></script>
</body>
</html>