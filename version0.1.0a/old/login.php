<?php
     include("mysql_connect.php");
     $mysqldb = "THE_DATABASE_YOU_WANT_TO_USE_FOR_THIS";
     mysql_select_db($mysqldb, $connection) or die("Cannot choose database.");

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();

      $username = $_POST['username'];
      $password = md5($_POST['password']);
	  
      $request = "SELECT username, password FROM registrations WHERE username LIKE '$username' LIMIT 1"; 
      $result = mysql_query($request); 
      $row = mysql_fetch_object($result); 

      if ($row->password == $password) {
        $_SESSION['angemeldet'] = true;
        header('Location: ./secured_stuff.php');
        exit;
      }
	   else{
	   ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./stylesheets/style_login.css" />
  </head>
  
  <body lang="en">
    <form action="login.php" method="POST">
      <div class=login>
        <fieldset>
          <legend>
            <font style="font-size: 25px; letter-spacing: 2px;">Login</font>
          </legend>
          
          <font style="font-size: 15px; letter-spacing: 2px;">
            Hover the fields to see what you have to enter.
          </font>
          
          <p>
            <input name="username" class="inputuser" type="text" value="Username" onFocus="if(this.value=='Username') this.value=''" onBlur="if(this.value=='')this.value='Username'" 
            title="Please your Minecraft username.">
          </p>
          
          <p>
            <input name="password" class="inputuser" type="password" value="Password" onFocus="if(this.value=='Password') this.value=''" onBlur="if(this.value=='')this.value='Password'" 
            title="Please enter your Minecraft password.">
          </p>
          
          <p>
            <font style="font-size: 15px; letter-spacing: 2px;">Click <a href="./register.php">here</a> to register for this website.</font>
          </p>
          
          <p>
            <input class="button_send" type="submit" value="Submit">
          </p>
        </fieldset>
      </div>
    </form>
  <body>
</html>