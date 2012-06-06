<?php

include_once("SteamUser.php");

class SteamAPI {
	
	function __construct() { }

	function getUser($id) {

		if(empty($id)) {
			echo "Error: No Steam ID or URL given!\n<br/>";
			return NULL;
		}

		$this->user = new SteamUser($id);
		return $this->user;
	}


}

?>