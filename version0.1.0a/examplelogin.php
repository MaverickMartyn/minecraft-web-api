<?php
  
  if(isset($_GET['username']) && isset($_GET['password'])) {
    include('./inc/func.inc.php');
    $username = $_GET['username'];
    $password = $_GET['password'];
    $login = login($username, $password);
    //$login = offlinelogin($username, $password); //For oflline testing. (NOT DONE!!!) REMOVE BEFORE PUSHING TO GITHUB!!!
    
    if($login != 'Successfully logged in.') {
      echo $login;
    }
    else {
      echo $login;
      
    }
  }
  else {
    echo 'Please login.';
  }
  
?>