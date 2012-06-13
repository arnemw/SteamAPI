<!DOCTYPE html>
<html>
<body>

<?php 
require_once("steam/SteamUser.php");
require_once("steam/SteamGame.php");
 ?>

<h1>Steam API Test </h1>

<?php

	//Handler for building this API from Terminal CLI:
	if(substr(php_sapi_name(), 0, 3) == "cli")
		$userID = $argv[1]; //Pull ID from CLI args
	else
		$userID = $_GET["id"]; // Pull it from the apache / CGI / whatever

	//Call the SteamUser constructor with either the 17-digit Steam Community ID
    //or their custom URL (i.e. robinwalker)
	//$user = new SteamUser($userID);


	$game = new SteamGame(440); //New SteamGame with TF2's AppID set.
	$news = $game->getNewsItems();
	print_r($news);


?>


</body>
</html>
