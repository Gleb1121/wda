<?php 
require_once ("config/database.php");
global $db;
global $ucp_settings;
global $ucp_table_settings;

function message($status,$header, $message, $url = '') {
	exit(json_encode(['status' => $status,'header' => $header, 'message' => $message, 'url' => $url]));
}

function location($url) {
	exit(json_encode(['url' => $url]));
}

function FixName($name)
{
	$order = array("_");
	$replace = " ";
	$newstr = str_replace($order,$replace,$name);
	$pos = strpos($newstr," ",1);
	$name = substr($newstr,0,$pos);
	$subname = substr($newstr,$pos,24);
	echo "".$name." ".$subname."";
}

function GetUserData()
{
	global $db;
	global $ucp_table_settings;

	$name = $_SESSION['NickName'];
	$sql = "SELECT * FROM `{$ucp_table_settings['table']}` WHERE `{$ucp_table_settings['login']}` = '{$name}' LIMIT 1";
		
	$statement = $db->prepare($sql);
	$statement->execute ();
	return $statement->fetch();
}

function getSettingColumn()
{
	global $db;
	$sql = "SELECT * FROM ucp_table_settings";

	$statement = $db->prepare($sql);
	$statement->execute ();

	while($columns = $statement->fetch())
	{
		$content .= "
		<div class=\"form-group\">
                          <label for=\"issueinput1\">Название поля | {$columns['name']}</label>
                          <input type=\"text\" id=\"issueinput1\" class=\"form-control\" value=\"{$columns['value_column']}\"
                          name=\"{$columns['name_column']}\" onChange=\"UpdateTableData(this.getAttribute('name'), this.value);\">
                        </div>

		";
	}
	return $content;
}

function getUsers() {
	global $db;

	global $ucp_table_settings;

	$sql = "SELECT {$ucp_table_settings['id']} FROM {$ucp_table_settings['table']}";

	$statement = $db->prepare($sql);

	$statement->execute ();

	return $statement->rowCount();
}

function checkOnlineData() {
	global $db;
	global $ucp_table_settings;

	$sql = "SELECT * FROM `{$ucp_table_settings['table']}` WHERE `online` != 0";
	$result = $db->query($sql);

	return $result->rowCount();
}

function checkSkinData() {
	global $db;
	global $ucp_table_settings;

	$sql = "SELECT * FROM `{$ucp_table_settings['table']}` WHERE `skins` LIMIT 1";
	$result = $db->query($sql);

	return $result[2]['s1'];
}

function checkPassword() {
	global $db;
	global $ucp_table_settings;
	global $ucp_settings;
	$name = $_SESSION['NickName'];
	$password = $_SESSION['Password'];

	$sql = "SELECT * FROM `{$ucp_table_settings['table']}` WHERE `{$ucp_table_settings['login']}` = '{$name}' LIMIT 1";

	$statement = $db->prepare($sql);
	$statement->execute ();

	if($statement->rowCount())
	{
		$data = $statement->fetch();
		if($ucp_settings['s_md5']) 
		{
			if($data[$ucp_table_settings['pass']] != md5($password)) exit("<meta http-equiv='refresh' content='0; url= /profile/exit'>");
		}
		else 
		{
			if($data[$ucp_table_settings['pass']] != $password) exit("<meta http-equiv='refresh' content='0; url= /profile/exit'>");
		}
	}
	else exit("<meta http-equiv='refresh' content='0; url= /profile/exit'>");
}

function newpass() {
	global $db,$_POST,$ucp_table_settings,$ucp_settings;
	
	if( isset($_POST["password"]) AND isset($_POST["token"]) ){
	
		$token = (isset($_POST["token"]) ? addslashes($_POST["token"]) : 0);
		$password = (isset($_POST["password"]) ? addslashes($_POST["password"]) : '');
		
		if( $password AND $token ){
			$sql = "SELECT * FROM `{$ucp_table_settings['table']}` WHERE `change_token` = '{$token}' LIMIT 1";
					
			$statement = $db->prepare($sql);
			$statement->execute ();
			$user = $statement->fetch();
			
			if(!$user){
				$msg = array(
					'header'=>'Помилка',
					'message'=>'Користувач не знайдений!',
					'status'=>'error',
				);
				
				die( json_encode($msg) );
			}

			$sql = "UPDATE `{$ucp_table_settings['table']}` SET password='{$password}',change_token='' WHERE `{$ucp_table_settings['login']}` = '{$user['login']}'";
			$statement = $db->prepare($sql);
			$statement->execute ();
			
			$msg = array(
				'header'=>'Успіх',
				'message'=>'Пароль змінено!',
				'status'=>'success',
				'url'=>'/profile/login',
			);
				
			die( json_encode($msg) );
		}

	}

}

function forgotPassword() {
	global $db,$_POST,$ucp_table_settings,$ucp_settings;
	
	if( isset($_POST["login"]) AND $_POST["login"]!='' ){
		
		$login = addslashes($_POST["login"]);
		
		$config = array(
		
			'admin_mail'	=> 'admin@kyivrp.com',
			'mail_title' 	=> 'KYIV RP',
			'mail_metod' 	=> 'php',

			'smtp_host'		=> '',
			'smtp_port' 	=> '',
			'smtp_secure' 	=> '',
			'smtp_user' 	=> '',
			'smtp_pass' 	=> '',
			'smtp_mail' 	=> '',
			
		);
		

		$sql = "SELECT * FROM `{$ucp_table_settings['table']}` WHERE `{$ucp_table_settings['login']}` = '{$login}' LIMIT 1";
			
		$statement = $db->prepare($sql);
		$statement->execute ();
		$user = $statement->fetch();
		
		if($user){
			$token = md5($user['login'] . rand(1000, 9999));
			
			$sql = "UPDATE `{$ucp_table_settings['table']}` SET change_token='{$token}' WHERE `{$ucp_table_settings['login']}` = '{$user['login']}'";
			
			$statement = $db->prepare($sql);
			$statement->execute ();
			
			$url = '<a href=https://kyivrp.com/profile/newpass/?token='.$token.' target=_blank>https://kyivrp.com/profile/newpass/?token='.$token.'</a>.';
			$message = "Дорогий ".$user['nickname'].", був виконаний запит на зміну вашого паролю! <br/>Для зміни паролю перейдіть за посиланням: ".$url." <br/><br/>Якщо це не ви, рекомендуємо проігнорувати цей лист!";

 			include_once($_SERVER['DOCUMENT_ROOT']."/mail/mail.class.php");
			
			$mail = new SMail( $config, true );
			
			$mail->send( $user['email'], "Зміна паролю", $message );
			
			//hide mail
			$atPos = strpos( $user['email'], "@" );
			preg_match('/(\..*?)$/', $user['email'], $topDomain, PREG_OFFSET_CAPTURE);
			$hiddenEmail = $user['email'][0].$user['email'][1].str_repeat('*', $atPos-2)."@".$user['email'][$atPos + 1].str_repeat('*', $topDomain[1][1]-$atPos-2). $topDomain[1][0];
			
			
			$msg = array(
				'header'=>'Відправлено',
				'message'=>'Повідомлення з посиланням на введення відправлено на пошту '.$hiddenEmail.'. Якщо лист не надійшов, перевірте папку спам! ',
				'status'=>'success',
			);
			
			die( json_encode($msg) );
		
		}else{
			
			$msg = array(
				'header'=>'Помилка',
				'message'=>'Логін не знайдено!',
				'status'=>'error',
			);
			
			die( json_encode($msg) );
		}
	}
}

?>