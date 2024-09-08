<?php
error_reporting(E_ALL);

include 'config.php';
include 'lib/FreekassaModel.php';
include 'lib/Freekassa.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

class FreekassaEvent
{
    public function check($params)
    {
        try {
            $freekassaModel = FreekassaModel::getInstance();

            if ($freekassaModel->getAccountByName($params['us_account'])) {
                return true;
            }
            return 'Character not found';
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function pay($params)
    {
         $freekassaModel = FreekassaModel::getInstance();
         $countItems = floor($params['AMOUNT'] / Config::ITEM_PRICE);
         $freekassaModel->donateForAccount($params['us_account'], $countItems);
    }
}

$payment = new Freekassa (
    new FreekassaEvent()
);

echo $payment->getResult();
