<?php
 if(!isset($_SESSION['A_Nick'])) exit("<meta http-equiv='refresh' content='0; url= /admin/login'>");
 else
{
class social extends hf {
	public function get_content() { 
		
		require_once ("engine/functions.php");
		//if(!checkAdmin()) exit("<meta http-equiv='refresh' content='0; url= /profile/'>");	
		if(file_exists("view/admin/social.php")) 
		{		
			include "view/admin/social.php"; 
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
}
?>
