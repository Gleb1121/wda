<?php

class index extends hf {

	public function get_content() { 
		include "engine/functions.php"; 
		if(file_exists("view/donate/index.php")) 
		{
						
			if( isset($_POST['sum']) AND isset($_POST['account'])){
				
			$_POST['sum'] = intval($_POST['sum']);
			$_POST['account'] = intval($_POST['account']);
				
				if( $_POST['sum'] AND $_POST['account']){
						
					$statement = $db->prepare("SELECT * FROM `{$ucp_table_settings['table']}` WHERE `id` = '{$_POST['account']}' limit 1");
					$statement->execute ();
					$user = $statement->fetch();
						
					if( isset($user) AND is_array($user) ){
							
						$statement = $db->prepare("INSERT INTO `donate`(`user_id`, `amount`, `currency`, `date_create`, `status`) VALUES ('".$user['id']."','".$_POST['sum']."','uah',NOW(),'new')");
						$statement->execute ();
											
						$donate_id = str_pad($db->lastInsertId(), 8, '0', STR_PAD_LEFT);
							
						$_SESSION['donate'] = array(
							'donate_id'=>$donate_id,
							'amount'=>$_POST['sum'],
							'user_nickname'=>$user['nickname']
						);
							
						$msg = array(
							'header'=>'Успіх',
							'message'=>'Зараз вас перенаправлять для донату!',
							'status'=>'success',
							'url'=>'/donate/order'
						);
					
						die( json_encode($msg) );
							
					}else{
						$msg = array(
							'header'=>'Помилка',
							'message'=>'Акаунт не знайдено!',
							'status'=>'error',
						);
					
						die( json_encode($msg) );
					}
						
				}else{
					$msg = array(
						'header'=>'Помилка',
						'message'=>'Заповніть усі поля!',
						'status'=>'error',
					);
					
					die( json_encode($msg) );
				}
			}

			
			include "view/donate/index.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}
?>
