<?php 

require_once './Class/Connection.php';
require_once './Class/User.php';

if ($_POST){
  $mail = $_POST['email'];
  $pass = $_POST['password'];
  
  $connection = new Connection();
  $userData = $connection->selectUser($mail);
  
  
  if (md5($_POST['password']) === $userData['password']){
    session_start();
    
    $_SESSION['name'] = $userData['first_name'];
    $_SESSION['mail'] = $userData['email'];
    $_SESSION['id'] = $userData['id'];

    header('Location: ./index.php?name=' . $_SESSION['name']);
  } else{
    echo 'pas bon';
  }
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
  <title>Log In - TBM</title>
</head>
<body class="bg-[url('../img/bg.svg')] bg-cover bg-no-repeat text-white text-base m-0 p-0 box-border w-full">



  <?php require_once('./src/components/header.php') ?>

  <section class="w-full items-center flex justify-center h-[91vh]">
    <div class="w-[90%] md:w-fit mx-auto rounded-xl bg-slate-500 bg-opacity-30 py-5 px-10 flex flex-col">
      <h2 class="underline uppercase text-3xl">Log In</h2>
      <form action="loginForm.php" method="post" class="py-8 flex flex-col"> 
        <input type="email" id="email" name="email" placeholder="Email" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none mt-4">
        <input type="password" name="password" id="password" placeholder="Password" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none mt-4">
        <button type="submit" class="mt-8 py-2 px-4 bg-sky-900 rounded-lg hover:shadow-md hover:bg-sky-600 duration-[250ms]">
          Submit
        </button>
      </form>
      <p class="text-center">Don't have an account ? <a href="signup.php" class="text-blue-400 underline">Sign up</a></p>
    </div>
  </section>
</body>
</html>