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
    <h1 class="font-bold tracking-wider text-lg"><a href="index.php">The Best <span class="text-sky-400">Movies</span></a></h1>
    <nav class="hidden md:block">
      <ul class="flex">
        <li><a href="index.php" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Home</a></li>
        <li><a href="recherche.php" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Browse</a></li>
        <li><a href="" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Discover</a></li>
        <?php if(isset($_SESSION['name'])) :  ?>
        <li><a href="./logout.php" class="px-4 py-2 hover:bg-opacity-30 hover:bg-white  rounded-full duration-[250ms]">Logout</a></li>

        <?php endif; ?>
      </ul>
    </nav>
</header>

<div class="flex flex-col text-center items-center py-9 border-b-2 border-sky-400">
      <h2 class="font-bold text-3xl tracking-wide underline decoration-sky-400">Find everything you wish for !</h2>
      <p class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ipsum quidem eum molestiae cupiditate, harum eos ducimus neque enim fuga.</p>

      <?php if (isset($_SESSION['name'])): ?>
        <h3>Welcome <?= $_SESSION['name'] ?> </h3>
      <?php else : ?>
      <div class="mt-5 gap-6 flex items-center">
        <a href="loginForm.php">Log In</a>
        <a href="signup.php" class="py-2 px-4 rounded-full bg-sky-400">Sign Up</a>
      </div>
      <?php endif; ?>
    </div>