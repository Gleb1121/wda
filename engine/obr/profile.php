<?php
session_start();

require_once ("../functions.php");

global $db;
global $ucp_table_settings;


if($_POST['action'] == "change_password")
{
	$new_pass_1 = trim($_POST['new_password_1']);
	$new_pass_2 = trim($_POST['new_password_2']);
	if(!empty($new_pass_1) && !empty($new_pass_2))
	{
		if($new_pass_1 == $new_pass_2)
		{
			if(strlen($new_pass_1) >= 6 && strlen($new_pass_1) <= 32)//Допустимая длина пароля
			{
				if (preg_match("#^[aA-zZ0-9\-_]+$#",$new_pass_1)) //Проверка на запрещеные символы
				{ 
					if($ucp_settings['s_md5']) $pass = md5($new_pass_1);
					else $pass = $new_pass_1;
				
					$sql = "UPDATE `{$ucp_table_settings['table']}` SET `{$ucp_table_settings['pass']}` = :password_user WHERE `{$ucp_table_settings['name']}` = :user_name";
					$statement = $db->prepare($sql);
					$statement->bindParam (':password_user', $pass);
					$statement->bindParam (':user_name', $_SESSION['NickName']);
			
					$statement->execute();
					message('success','Успіх','Ви успішно змінили пароль! Перезайдіть з новим паролем','/profile/exit');

				}
				else message('warning','Помилка','Ваш пароль містить заборонені символи');	 
			}
			else message('warning','Помилка','Допустима довжина паролю від 6 до 32 символів');	
		}
		else message('warning','Помилка','Паролі не співпадають');
	}
	else message('warning','Помилка','Заповніть всі поля');
}
if($_POST['action'] == "login") 
{
	$password = trim($_POST['user_password']);
	$name = trim($_POST['user_name']);
	// $captcha_key = trim($_POST['captcha_key']);

	if(!empty($password) && !empty($name))
	{

			$sql = "SELECT `{$ucp_table_settings['pass']}` FROM `{$ucp_table_settings['table']}` WHERE `{$ucp_table_settings['login']}` = '$name' LIMIT 1";
			// message('warning','Помилка',$sql );	
			$statement = $db->prepare($sql);
			$statement->execute ();

			if($statement->rowCount())
			{
				$data = $statement->fetch();

			 	if($ucp_settings['s_md5']) 
				{
					if($data[$ucp_table_settings['pass']] == md5($password))
				 	{
				 		session_start();
				 		$_SESSION['NickName'] = $name;
				 		$_SESSION['Password'] = $password;
				 		
				 		message('success','Успіх','Ви успішно авторизувались! Зараз вас перенаправлять до Особистого кабінету','/profile/'); 		
				 	}	
				 	else message('warning','Помилка','Дані введені неправильно, виправте помилку та спробуйте знову!');
				}
				else
				{
					if($data[$ucp_table_settings['pass']] == $password)
				 	{
				 		session_start();
				 		$_SESSION['NickName'] = $name;
				 		$_SESSION['Password'] = $password;
				 		
				 		message('success','Успіх','Ви успішно авторизувалися! Зараз вас перенаправлять до Особистого кабінету','/profile/'); 		
				 	}	
				 	else message('warning','Помилка','Дані введені неправильно, виправте помилку та спробуйте знову!');
				}
			}
			else message('warning','Помилка','Дані введені неправильно');
	}
	else message('warning','Помилка','Заповніть всі поля');
}