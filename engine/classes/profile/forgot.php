<?php
if(isset($_SESSION['NickName'])) exit("<meta http-equiv='refresh' content='0; url= /profile/'>");
else
{
class forgot extends hf {
	public function get_content() { 
		
		require_once ("engine/functions.php");
		if(file_exists("view/profile/forgot.php")) 
		{
			
			forgotPassword();
				
			include "view/profile/forgot.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
}
?>
