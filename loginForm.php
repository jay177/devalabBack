<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./dist/output.css">
  <script src="https://kit.fontawesome.com/23761b7654.js" crossorigin="anonymous"></script>
  <title>Log In - TBM</title>
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
  
  <section class="w-full items-center flex justify-center h-[91vh]">
    <div class="w-[90%] md:w-fit mx-auto rounded-xl bg-slate-500 bg-opacity-30 py-5 px-10 flex flex-col">
      <h2 class="underline uppercase text-3xl">Log In</h2>
      <form action="login.php" method="post" class="py-8 flex flex-col"> 
        <label for="email">Email:</label><br>       
        <input type="email" id="email" name="email" placeholder="Email" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none mt-4">
        <input type="password" name="password" id="password" placeholder="Password" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none mt-4">
        <button type="submit" class="mt-8 py-2 px-4 bg-sky-900 rounded-lg hover:shadow-md hover:bg-sky-600 duration-[250ms]">
          Submit
        </button>
      </form>
      <p class="text-center">Don't have an account ? <a href="signup.html" class="text-blue-400 underline">Sign up</a></p>
    </div>
  </section>
</body>
</html>