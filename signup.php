<?php

require_once './Class/Connection.php';
require_once './Class/User.php';

if ($_POST){
  $user = new User(
    $_POST['first-name'],
    $_POST['last-name'],
    $_POST['email'],
    $_POST['password']
  );

  $connection = new Connection();
  $result = $connection->insertUser($user);
  if ($result){
    header('Location: ./loginForm.php');
  } else {
    echo 'Error';
  }
}
?>
<?php if (isset($error_msg)) { echo $error_msg; } ?>

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
      <h2 class="underline uppercase text-3xl">Sign Up</h2>
      <form  action="signup.php" method="POST" class="py-8 flex flex-col">
        <div>
          <input type="text" name="first-name" id="first-name" required placeholder="First Name" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none w-full md:w-fit">
          <input type="text" name="last-name" id="last-name" required placeholder="Last Name" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none mt-4 w-full md:w-fit">
        </div>
        
        <input type="email" id="email" name="email" required placeholder="Email" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none mt-4">
        <input type="password" id="password" name="password" required placeholder="Password" class="py-2 px-4 rounded-lg bg-slate-600 shadow-md outline-none mt-4">
        <button type="submit" class="mt-8 py-2 px-4 bg-sky-900 rounded-lg hover:shadow-md hover:bg-sky-600 duration-[250ms]">
          Submit
        </button>
      </form>
    </div>
    
  </section>


</body>
</html>