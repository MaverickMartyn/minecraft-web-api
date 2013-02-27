<?php
  
   
  include('./inc/config.php');
  
  //Login function.
  function login($nameoremail, $password) {
    
    //Unable to use https (SSL) at the moment due to complications with certain server setups.
    $ssl = use_ssl($use_ssl);
    $content = file_get_contents('http'.$ssl.'://login.minecraft.net/?user='.$nameoremail.'&password='.$password.'&version=13', false) or die('FATAL ERROR: Could not connect to login.minecraft.net');
    
    $badlogin = 'Bad login';
    $migrated = 'Account migrated, use e-mail as username.';
    $successful = 'Successfully logged in.';
    if($content == $migrated) {
      return $migrated;
    }
    elseif($content == $badlogin) {
      return $badlogin;
    }
    else {
      return $successful;
    }
  }
    
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    //REMOVE BEFORE PUSHING TO GITHUB!!!  START
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  function offlinelogin($nameoremail, $password) {
    $badlogin = 'Bad login';
    $migrated = 'Account migrated, use e-mail as username.';
    $successful = 'Successfully logged in.';
    if($nameoremail == 'hackerfinn' && $password == 'trustno1') {
      return $migrated;
    }
    elseif($nameoremail != 'hackerfinn@gmail.com' && $nameoremail != 'hackerfinn@gmail.com' || $password != 'trustno1') {
      return $badlogin;
    }
    else {
      return $succesful;
    }
  }
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  //REMOVE BEFORE PUSHING TO GITHUB!!!  END
  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  
?>