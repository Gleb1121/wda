<?php

class order extends hf {
	public function get_content() { 
		
		require_once ("engine/functions.php");
		if(file_exists("view/donate/order.php")) 
		{

			if( isset($_SESSION['donate']) AND count($_SESSION['donate']) ){
				
				include_once($_SERVER['DOCUMENT_ROOT']."/interkassa/class.php");
					
					$data = $_SESSION['donate'];
					
					$Signature = new Signature;
					$params = array(
						'ik_co_id'=>$interkassa['checkout_ID'],
						'ik_pm_no'=>'ID_'.$data['donate_id'],
						'ik_am'=>$data['amount'],
						'ik_cur'=>$interkassa['currency'],
						'ik_desc'=>'Donate Kyiv RP ['.$data['user_nickname'].']'
					);
					
					if( $interkassa['test_interkassa'] ) $params['ik_pw_via'] = 'test_interkassa_test_xts';

					$params['ik_sign'] = $Signature->makeSignature($params,$interkassa['secret_key'],$interkassa['algorithm']);
					
					unset($_SESSION['donate']);
			}else{
				exit("<meta http-equiv='refresh' content='0; url= /donate/'>");
			}
			
			include "view/donate/order.php"; 
			
		} else exit("<meta http-equiv='refresh' content='0; url= /'>");	
	}
}


?>