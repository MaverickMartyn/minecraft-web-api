<?php

class MinecraftAPI {

public $minecraftUsername = '';
public $sessionID = '';

public function login($mojangname, $password, $version=13){

// create connection
$minecraftSocket = fopen("http://login.minecraft.net/?user=$mojangname&password=$password&version=$version", "rb");

// variable for output
$minecraftOutput = '';

// read output by minecraft.net
while (!feof($minecraftSocket)) {
// write output
$minecraftOutput .= fgets($minecraftSocket, 128);
}

// close connection
fclose($minecraftSocket);

// check if user has a bad login
if(strpos($minecraftOutput, 'Bad login') === false){
// split values
$minecraftValues = explode(':', $minecraftOutput);

if(count($minecraftValues) > 1){
// we just read the second and third entry (the rest is uninteresting for that what we are doing)
$this->minecraftUsername = $minecraftValues[2];
$this->sessionID = $minecraftValues[3];
$return = 'success';
return $return;

}else{
// account migrated.
$return = 'migrated';
return $return;
}

}else{
//Something else went wrong.
$return = 'failed';
return $return;
}
}
}

?>