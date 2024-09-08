<?php
session_start();
require_once ("../functions.php");
global $db;


if($_POST['action'] == "go_login") 
{
	$password = trim($_POST['password']);
	$name = trim($_POST['login']);
	// $captcha_key = trim($_POST['captcha_key']);

	if(!empty($password) && !empty($name))
	{
			$sql = "SELECT `a_pass` FROM `ucp_admin` WHERE `a_admin` = '$name' LIMIT 1";
			// message('warning','Ошибка',$sql );	
			$statement = $db->prepare($sql);
			$statement->execute ();

			if($statement->rowCount())
			{
				$data = $statement->fetch();
					if($data['a_pass'] == $password)
				 	{
				 		session_start();
				 		$_SESSION['A_Nick'] = $name;
				 		//$_SESSION['Password'] = $password;
				 		
				 		message('success','Успіх!','Ви успішно авторизувалися!
				 		Зараз вас перенаправлять в Особистий кабінет','/admin/'); 		
				 	}	
				 	else message('warning','Помилка!','Дані введені невірно Виправте помилку і спробуйте знову!');
			}
			else message('warning','Помилка!','Дані введені невірно!');
	}
	else message('warning','Помилка!','Заповніть всі поля!');
		



}

if($_POST['action'] == "update_news")
{
	$n_id = trim($_POST['n_id']);
	$n_title = trim($_POST['n_title']);
	$n_url = trim($_POST['n_url']);
	$n_text = trim($_POST['n_text']);
	$n_images = trim($_POST['n_images']);
	if(!empty($n_images) && !empty($n_text) && !empty($n_url) && !empty($n_title))
	{
		//$n_data =  date('d.m.Y'); 
		// $sql = "INSERT INTO `ucp_news` ( `n_title`, `n_text`, `n_data`, `n_images`,`n_url`) VALUES ( '{$n_title}', '{$n_text}', '{$n_data}','{$n_images}','{$n_url}')";
		$sql = "UPDATE `ucp_news` SET `n_title` = '{$n_title}',`n_text` = '{$n_text}',`n_images` = '{$n_images}',`n_url` = '{$n_url}' WHERE `n_id` = '{$n_id}'";
		$result = $db->query($sql, PDO::FETCH_ASSOC);
		if($result) message('success','Успіх!',"Ви успішно зберегли новину!", "/admin/news");
		else message('warning','Системна помилка!',"Нам не вдалося зберегти новину!", "/admin/news");
	}
	else message('warning','Помилка!',"Заповніть всі поля!");	

}
if($_POST['action'] == "delete_news")
{
	$n_id = trim($_POST['n_id']);
	if(!empty($n_id))
	{
		//$n_data =  date('d.m.Y'); 
		// $sql = "INSERT INTO `ucp_news` ( `n_title`, `n_text`, `n_data`, `n_images`,`n_url`) VALUES ( '{$n_title}', '{$n_text}', '{$n_data}','{$n_images}','{$n_url}')";
		$sql = "DELETE FROM `ucp_news` WHERE `n_id` = '{$n_id}'";
		$result = $db->query($sql, PDO::FETCH_ASSOC);
		if($result) message('success','Успіх!',"Ви успішно видалили новину!", "/admin/news");
		else message('warning','Системна помилка!',"Нам не вдалося видалити новину!", "/admin/news");
	}

}
if($_POST['action'] == "create_news")
{
	$n_title = trim($_POST['n_title']);
	$n_url = trim($_POST['n_url']);
	$n_text = trim($_POST['n_text']);
	$n_images = trim($_POST['n_images']);

	if(!empty($n_images) && !empty($n_text) && !empty($n_url) && !empty($n_title))
	{
		$n_data =  date('d.m.Y'); 
		$sql = "INSERT INTO `ucp_news` ( `n_title`, `n_text`, `n_data`, `n_images`,`n_url`) VALUES ( '{$n_title}', '{$n_text}', '{$n_data}','{$n_images}','{$n_url}')";
		$result = $db->query($sql, PDO::FETCH_ASSOC);
		if($result) message('success','Успіх!',"Ви успішно створили новину!", "/admin/news");
		else message('warning','Системна помилка!',"Нам не вдалося створити новину!", "/admin/news");
	}
	else message('warning','Ошибка!',"Заповніть поле!");	
}

if($_POST['action'] == "update_table_setting")
{
	$id = trim($_POST['id_pole']);
	$name = trim($_POST['name_pole']);
	$value = trim($_POST['value']);
	
	if(!empty($value))
	{
		//$sql = "UPDATE `ucp_table_settings` SET {$name} = {$value}";
		$sql = "UPDATE `ucp_table_settings` SET `value_column` = '{$value}' WHERE `name_column` = '{$name}'";
		$result = $db->query($sql, PDO::FETCH_ASSOC);
		
		if($result) message('success','Успіх!',"Ви успішно оновили дані!");
		else message('warning','Системна помилка!',"Нам не вдалося зберегти інформацію!", "/admin/table");
	}
	else message('warning','Помилка!',"Заповніть поле!");	
}

if($_POST['action'] == "save_settings_ucp")
{
	$s_title = trim($_POST['s_title']);
	$s_description = trim($_POST['s_description']);
	$s_tags = trim($_POST['s_tags']);
	$s_logo = trim($_POST['s_logo']);
	$s_favicon = trim($_POST['s_favicon']);
	$s_monitoring = trim($_POST['s_monitoring']);
	//$s_md5 = trim($_POST['s_md5']);

	if(!empty($s_title) && !empty($s_description) && !empty($s_tags) && !empty($s_logo) && !empty($s_favicon))
	{
		$sql = "UPDATE `ucp_settings` SET `s_title` = :s_title,`s_description` = :s_description,`s_tags` = :s_tags,`s_favicon` = :s_favicon,`s_logo` = :s_logo,`s_monitoring` = :s_monitoring";
		$statement = $db->prepare($sql);
		$statement->bindParam (':s_title', $s_title);
		$statement->bindParam (':s_description', $s_description);
		$statement->bindParam (':s_tags', $s_tags);
		$statement->bindParam (':s_logo', $s_logo);
		$statement->bindParam (':s_favicon', $s_favicon);
		$statement->bindParam (':s_monitoring', $s_monitoring);
		//$statement->bindParam (':s_md5', $s_md5);
		$statement->execute();
		if($statement->rowCount()) message('success','Успіх!',"Ви успішно зберегли дані! Зараз ми їх оновимо!", "/admin/");
		else message('warning','Системна помилка!',"Нам не вдалося зберегти інформацію!", "/admin/");
	}
	else message('warning','Помилка!',"Заповніть всі поля");	
}

if($_POST['action'] == "save_settings_ucp_social")
{
	$s_telegram = trim($_POST['s_telegram']);
	$s_telegram_check = trim($_POST['s_telegram_check']);
	$s_youtube = trim($_POST['s_youtube']);
	$s_youtube_check = trim($_POST['s_youtube_check']);
	$s_discord = trim($_POST['s_discord']);
	$s_discord_check = trim($_POST['s_discord_check']);
	$s_tiktok = trim($_POST['s_tiktok']);
	$s_tiktok_check = trim($_POST['s_tiktok_check']);
	$s_instagram = trim($_POST['s_instagram']);
	$s_instagram_check = trim($_POST['s_instagram_check']);

	if(!empty($s_telegram) && !empty($s_youtube) && !empty($s_discord) && !empty($s_tiktok) && !empty($s_instagram))
	{
		$sql = "UPDATE `ucp_settings` SET `s_telegram` = :s_telegram,`s_telegram_check` = :s_telegram_check,`s_youtube` = :s_youtube,`s_youtube_check` = :s_youtube_check,`s_discord` = :s_discord,`s_discord_check` = :s_discord_check,`s_tiktok` = :s_tiktok,`s_tiktok_check` = :s_tiktok_check,`s_instagram` = :s_instagram,`s_instagram_check` = :s_instagram_check";
		$statement = $db->prepare($sql);
		$statement->bindParam (':s_telegram', $s_telegram);
		$statement->bindParam (':s_telegram_check', $s_telegram_check);
		$statement->bindParam (':s_youtube', $s_youtube);
		$statement->bindParam (':s_youtube_check', $s_youtube_check);
		$statement->bindParam (':s_discord', $s_discord);
		$statement->bindParam (':s_discord_check', $s_discord_check);
		$statement->bindParam (':s_tiktok', $s_tiktok);
		$statement->bindParam (':s_tiktok_check', $s_tiktok_check);
		$statement->bindParam (':s_instagram', $s_instagram);
		$statement->bindParam (':s_instagram_check', $s_instagram_check);
		$statement->execute();
		if($statement->rowCount()) message('success','Успіх!',"Ви успішно зберегли дані! Зараз ми їх оновимо!", "/admin/social/");
		else message('warning','Системна помилка!',"Нам не удалось сохранить информацию!", "/admin/social/");	
	
	}
	else message('warning','Помилка!',"Заповніть всі поля");	
}