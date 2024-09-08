<?php

class failure extends hf {

	public function get_content() { 
		include "engine/functions.php"; 
		if(file_exists("view/donate/failure.php")) 
		{
			include "view/donate/failure.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}

?>