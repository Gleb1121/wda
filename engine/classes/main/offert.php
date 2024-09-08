<?php
class offert extends hf {
	public function get_content() { 
		include "engine/functions.php"; 
		if(file_exists("view/main/offert.php")) 
		{
			include "view/main/offert.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
?>
