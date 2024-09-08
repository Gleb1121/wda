<?php

class success extends hf {

	public function get_content() { 
		include "engine/functions.php"; 
		if(file_exists("view/donate/success.php")) 
		{
			include "view/donate/success.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}

?>