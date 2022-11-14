<?php

  session_start();
  if(isset($_POST['submit'])){

  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username == 'tatai' && $password == 'stark'){
    $_SESSION['username'] = $username;
    header('Location:/stark-music-2.0/stark-music-html/index.html');
  } else{
    echo 'incorrect login';
  }
  }
?>
 