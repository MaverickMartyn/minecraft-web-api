<?php

  //Checks if the API has alread been set up. If not, it runs the setup. If yes, it displays an error message.
  if(file_exists('../inc/config.php') == true) {
    echo 'It seems the API has already been set up. (Please delete the "api-setup" after finnished setup.)<br />
    If you made a mistake, delete the "config.php" file in the "inc" folder or go <a href="edit.php"></a>.';
  }
  else {
    //Shows the setup form.
    if(!isset($_POST['use_ssl']) && !isset($_POST['db_host']) && !isset($_POST['db_user']) && !isset($_POST['db_password']) && !isset($_POST['db_database'])) {
      ?>
      
      <form action="." method="POST">
        <h1>Minecraft Web API - Basic installation setup.</h1>
        <b>ALL FIELDS ARE REQUIRED</b>
        <h3>Connection settings</h3>
        Use SSL (secure connection to login.minecraft.net)? <input checked="true" type="radio" name="use_ssl" value="true" />on <input type="radio" name="use_ssl" value="false" />off<br />
        <h3>Database settings</h3>
        <table>
        <tr><td>Database host: </td><td><input type="text" name="db_host" value="" /></td></tr>
        <tr><td>Database user: </td><td><input type="text" name="db_user" value="" /></td></tr>
        <tr><td>Database password: </td><td><input type="password" name="db_password" value="" /></td></tr>
        <tr><td>Database name: </td><td><input type="text" name="db_database" value="" /></td></tr>
        </table>
        <input type="submit" name="submit" value="Install" />
      </form
      
      <?php
    }
    else {
      
    }
  }

?>