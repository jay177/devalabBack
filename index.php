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
        <li><a href="index.html" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Home</a></li>
        <li><a href="" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Albums</a></li>
        <li><a href="account.html" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Account</a></li>
      </ul>
    </nav>
    
    <div class="hidden md:block">
      <form action="" class="relative">
        <input type="search" name="" id="" placeholder="Search" class="bg-white bg-opacity-30 px-4 py-2 rounded-full text-white outline-0">
        <button type="submit" class="bg-sky-400 bg-opacity-30 px-4 py-2 rounded-full text-white outline-0 absolute right-0">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>
    
  </header>
  <section class="w-11/12 mx-auto my-7">
    <div class="flex flex-col text-center items-center pb-9 border-b-2 border-sky-400">
      <h2 class="font-bold text-3xl tracking-wide underline decoration-sky-400">Find everything you wish for !</h2>
      <p class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsum quidem eum molestiae cupiditate, harum eos ducimus neque enim fuga.</p>
    </div>

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