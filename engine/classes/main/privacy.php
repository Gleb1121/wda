<?php
class privacy extends hf {
	public function get_content() { 
		include "engine/functions.php"; 
		if(file_exists("view/main/privacy.php")) 
		{
			include "view/main/privacy.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
?>
