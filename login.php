
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  
  $db = mysqli_connect('localhost','root','root','back-dev');


  $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($db, $query);
  $user = mysqli_fetch_assoc($result);


  if ($user) {
    session_start();
    $_SESSION['logged_in'] = true;
    header('Location: index.php');
    exit;
  }
 
  else {
    $error_msg = "Incorrect email or password";
  }
}
?>




<?php if (isset($error_msg)) { echo $error_msg; } ?>
