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
<div class="hidden w-4/5 h-[100vh]  pl-14 pt-[50%] items-start gap-24 flex-col md:hidden">
    <div class="block md:hidden">
      <form action="" class="relative">
        <input type="search" name="" id="" placeholder="Search" class="bg-white bg-opacity-30 px-4 py-2 rounded-full text-white outline-0">
        <button type="submit" class="bg-sky-400 bg-opacity-30 px-4 py-2 rounded-full text-white outline-0 absolute right-0">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>
    <nav>
      <ul>
        <li>Home</li>
        <li>Albums</li>
        <li>Account</li>
      </ul>
    </nav>
  </div>
  <header class="w-full h-[9vh] border-b-2 border-gray-400 flex items-center justify-between px-10 relative">
    <div class="burger md:hidden">
      <i class="fa-solid fa-bars-staggered"></i>
    </div>
    <h1 class="font-bold tracking-wider text-lg"><a href="index.html">The Best <span class="text-sky-400">Movies</span></a></h1>
    <nav class="hidden md:block">
      <ul class="flex">
        <li><a href="index.php" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Home</a></li>
        <li><a href="" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Albums</a></li>
        <li><a href="account.html" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Account</a></li>
      </ul>
    </nav>
    
    
    
  </header>

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