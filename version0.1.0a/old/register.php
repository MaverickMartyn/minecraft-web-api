<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./stylesheets/style_reg_new.css" />
    <title>Registration</title>
  </head>
  
  <body>
    <div class="reg">
      <form action="register_taken.php" method="POST">
        <fieldset>
          <legend><p><font class="font" style="font-size: 25px; letter-spacing: 2px;">Registration</font></p></legend>
          <p>
            <font class="font2" style="font-size: 15px; letter-spacing: 2px;">Hover the fields to see what you have to enter.</font>
          </p>

          <p>
            <input name="mojangname" class="inputuser" type="text" value="Minecraft-IGN" onFocus="if(this.value=='Minecraft-IGN') this.value=''" onBlur="if(this.value=='')this.value='Minecraft-IGN'" 
            title="Please enter your Minecraft-name (if you migrated your account, enter you Mojang-Email).">
          </p>

          <p>
            <input name="username" class="inputuser" type="text" value="Username" maxlength="25" onFocus="if(this.value=='Username') this.value=''" onBlur="if(this.value=='')this.value='Username'" 
            title="Please enter your wished username (the one you want to use one this site).">
          </p>

          <p>
            <input name="email" class="inputuser" type="text" value="eMail" onFocus="if(this.value=='eMail') this.value=''" onBlur="if(this.value=='')this.value='eMail'" 
            title="Please enter the eMail-address you wish to use for this site.">
          </p>

          <p>
            <input name="password" class="inputuser" type="password" value="Password" onFocus="if(this.value=='Password') this.value=''" onBlur="if(this.value=='')this.value='Password'" 
            title="Please enter your password. Has to be the same as your Minecraft-Password.">
          </p>

          <p>
            <input name="passwordcorrect" class="inputuser" type="password" value="Password" onFocus="if(this.value=='Password') this.value=''" onBlur="if(this.value=='')this.value='Password'" 
            title="Please repeat your entered password.">
          </p>


          <p>
            <input class="button_send" id="button_send" type="submit" value="Submit">
          </p>
        </fieldset>
      </form>
    </div>
    </body>
</html>