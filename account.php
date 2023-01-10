<?php


session_start();

require_once './Class/Connection.php';
require_once './Class/Album.php';

if (!isset($_SESSION['name'])){
  header('Location: index.php');
}

$connection = new Connection();
$result = $connection->selectUser($_SESSION['mail']);


$userAlbums = $connection->getUserAlbums($_SESSION['mail']);


if ($_POST){
  if($_POST['private']){
    $is_private = 1;
  } else {
    $is_private = 0;
  }
  $album = new Album(
    $_POST['name'],
    intval($result['id'], 10),
    $is_private
  );

  $connection = new Connection();
  $result = $connection->insertAlbum($album);
}
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
  
  <div class="w-11/12 m-auto">
    <div class="pb-[5px]">
      <h2 class="text-2xl font-semibold">Albums</h2>
    </div>
    <hr>
  </div>

  <section class="w-11/12 justify-center md:justify-start m-auto my-10 flex flex-wrap gap-5">
    <?php foreach ($userAlbums as $album) :  ?>
      <div class="w-full md:w-1/5 h-[50vh] rounded-[30px] bg-[url('../img/black-panther.webp')] bg-cover bg-center flex items-end overflow-hidden">
        <div class="pl-5 pb-5 bg-white bg-opacity-30 w-full">
          <p class="uppercase font-semibold"><?= $album['name']; ?></p>
          <p>15 films</p>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="modal w-fit">
    <form action="" method="post" class="py-4 px-8 bg-sky-400 w-fit flex flex-col">
      <input type="text" name="name" id="name" placeholder="Album name">
      <label for="private">Is Private</label>
      <input type="checkbox" name="private" id="private">
      <input type="submit" value="Create" class="bg-white text-black">
    </form>
  </div>
    
  </section>
  <script src="https://kit.fontawesome.com/23761b7654.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="script.js"></script>
</body>
</html>