<?php

class PostController
{
    public function actionIndex()
    {

    }

    public function actioncategoryList()
    {
        require_once(ROOT . '/views/post/firststep.php');
        return true;

    }

    public function actionCharge()
    {
        require_once(ROOT . '/views/payment/payment.php');
        return true;
    }

}