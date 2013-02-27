<?php
    include('./minecraftAPI.php');
		
    $username = $_POST['username'];
	$mojangname = $_POST['mojangname'];
	$email = $_POST['email'];
    $password = $_POST['password'];
	$passwordcorrect = $_POST['passwordcorrect'];
	
	$api = new MinecraftAPI();
	
	$mysqlhost = "HOST";
    $mysqluser = "USERNAME";
    $mysqlpw = "MYSQLPW";
	$mysqldb = "THE_DATABASE_YOU_WANT_TO_USE_FOR_THIS";
	$connection=mysql_connect("HOST", "USERNAME", "MYSQLPW") or die
    ("Failed to connect.");
	mysql_select_db($mysqldb, $connection) or die("Cannot choose database.");
	
	
//CHECK 1: EMPTY FIELDS (Not possible for default...)
	if($username=="" OR $mojangname=="" OR $email=="" OR $password=="" OR $passwordcorrect==""){
	    ?>
		failed 1: on empty fields check
        <?php
	}
    //CHECK 2: DEFAULT DATA IN THE FIELDS
	else{
	    if($username=="Username" OR $mojangname=="Minecraft-IGN" OR $email=="eMail" OR $password=="Password" OR $passwordcorrect=="Password"){
	        ?>
			failed 2: on default data check
			<?php
		}
		else{
		    //CHECK 3: USERNAME TOO SHORT
		    if(strlen($username) < 5){
					    ?>
						failed 3: username too short check
						<?php
			}
			else{
                //CHECK 4: INVALID EMAIL-ADDRESS			
		        if (preg_match('|^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$|i', $email)) {
			        //CHECK 5: PASSWORDS ARE SAME
			        if($password==$passwordcorrect){
				        //CHECK 6: PASSWORD TOO SHORT
					    if(strlen($password) < 6){
					        ?>
						    failed 6: password too short check
						    <?php
					    }
					    else{
					        //CHECK 7: CORRECT MINECRAFT LOGIN-DATA
						    if($api->login($mojangname, $password) == success){
						        //CHECK 8: MOJANGNAME ALREADY IN DATABASE
						        $request0 = "SELECT mojangname FROM registrations WHERE mojangname='$mojangname'";
                                $result0 = mysql_query($request0);
						        $password = md5($_POST['passwordcorrect']);
						        $passwordcorrect = md5($_POST['passwordcorrect']);
						        if(mysql_num_rows($result0) != 0){
							        ?>
                                    failed 8: mojangname in database check
                                    <?php								
							    }
							    else{
							        //CHECK 9: EMAIL ALREADY IN DATABASE
							        $request1 = "SELECT email FROM registrations WHERE email='$email'";
                                    $result1 = mysql_query($request1);
						            if(mysql_num_rows($result1) != 0){
							            ?>
									    failed 9: email in database check
									    <?php
							        }
                                    else{
								        //CHECK 10: USERNAME  ALREADY IN  DATABASE
								        $request2 = "SELECT username FROM registrations WHERE username='$username'";
                                        $result2 = mysql_query($request2);
						                if(mysql_num_rows($result2) != 0){
									        ?>
										    failed 10: username in database check
										    <?php
									    }
									    else{
									        //CHECK 11: WAS "FINAL INSERT" SUCCESFULL?
									        $insert0 = "INSERT INTO registrations (username, mojangname, password, email) VALUES ('$username', '$mojangname', '$password', '$email')";
									        $insertDo0 = mysql_query($insert0);
									        if($insertDo0 == true){
										        header('Location: http://mcjarhead.freeiz.com/login.php');
										    }
										    else{
										        ?>
											    failed 11: insert failed
											    <?php
										    }
									    }
                                    }							
							    }
						    }
						    else{
						        ?>
							    failed 7: minecraft login-data check
							    <?php
						    }
					    }
				    }
				    else{
				        ?>
					    failed 5: passwords are same check
					    <?php
				    }
			    }
			    else{
			        ?>
				    failed 4: invalid email check
				    <?php
				}
			}
		}
	}
?>	