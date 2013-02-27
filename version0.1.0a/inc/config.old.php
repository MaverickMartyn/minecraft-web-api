<?php
  
  //Debugging START
  
  echo 'Config included successfully.';
  
  //Debugging END
  
  /*******************************************************************/
  /** This file includes all the API's configurations and settings. **/
  /*******************************************************************/
  
  //Define whether you wish to use ssl (secure connection) to connect to login.minecraft.net (true = SSL on - false = SSL off)
  $use_ssl = true;
  
  //IGNORE THIS START
  
  function use_ssl($use_ssl) {
    if($use_ssl == true) {
      $ssl = 's';
      return $ssl;
    }
    elseif($use_ssl == false) {
      $ssl = '';
      return $ssl;
    }
    else {
      die('Config error in SSL settings.');
    }
  }
  
  //IGNORE THIS END
  
  //DATABASE SETTINGS START
  
  $db_host = 'localhost';
  
  $db_user = 'root';
  
  $db_password = 'trustno1';
  
  $db_database = 'INSERT DATABASE NAME HERE';
  
  //DATABASE SETTINGS END

?>