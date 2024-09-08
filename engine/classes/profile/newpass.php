<?php
if(isset($_SESSION['NickName']) OR !isset($_REQUEST['token'])) exit("<meta http-equiv='refresh' content='0; url= /'>");
else
{
class newpass extends hf {
	public function get_content() { 
		
		require_once ("engine/functions.php");
		if(file_exists("view/profile/newpass.php")) 
		{
			
			newpass();
				
			include "view/profile/newpass.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
}
?>
