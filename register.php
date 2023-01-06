<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  
  $db = mysqli_connect('localhost','root','root','back-dev');

  
  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($db, $query);
  $user = mysqli_fetch_assoc($result);
  
  
  
  if (!$user) {
    $query = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
    mysqli_query($db, $query);


    
    session_start();
    $_SESSION['logged_in'] = true;
    header('Location: index.php');
    exit;
  }
  
  else {
    $error_msg = "Email already in use";
    var_dump($query);
  }
}
?>

<?php if (isset($error_msg)) { echo $error_msg; } ?>