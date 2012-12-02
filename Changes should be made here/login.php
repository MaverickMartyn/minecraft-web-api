<html>
<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="./stylesheets/style_login.css" />
</head>
<form action="login_taken.php" method="POST">
<div class=login>
<fieldset>
<legend><font style="font-size: 25px; letter-spacing: 2px;">Login</font></legend>
<font style="font-size: 15px; letter-spacing: 2px;">Hover the fields to see what you have to enter.</font>
<p>
<input name="username" class="inputuser" type="text" value="Username" onFocus="if(this.value=='Username') this.value=''" onBlur="if(this.value=='')this.value='Username'" 
title="Please enter the username you chose for this site.">
</p>
<p>
<input name="password" class="inputuser" type="password" value="Password" onFocus="if(this.value=='Password') this.value=''" onBlur="if(this.value=='')this.value='Password'" 
title="Please enter your password. Has to be the same as your Minecraft-Password.">
</p>
<p>
<font style="font-size: 15px; letter-spacing: 2px;">Click <a href="http://mcjarhead.freeiz.com/register.php">here</a> to register for this website.</font>
</p>
<p>
<input class="button_send" type="submit" value="Submit">
</p>
</fieldset>
</div>
</html>