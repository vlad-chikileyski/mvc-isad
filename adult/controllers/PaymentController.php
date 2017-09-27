<?php

class PaymentController
{
    public function actionIndex($id, $key)
    {

        require_once(ROOT . '/views/payment/checkout.php');
        return true;
    }
}