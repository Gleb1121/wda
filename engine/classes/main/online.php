<?php
class online extends hf {
	public function get_content() { 
		include "engine/functions.php"; 
		if(file_exists("view/main/online.php")) 
		{
			include "view/main/online.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
?>
