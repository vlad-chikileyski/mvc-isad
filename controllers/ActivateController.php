<?php

class ActivateController
{
    public function actionIndex($idAds)
    {
        require_once(ROOT . '/views/post/activate.php');
        return true;
    }
}