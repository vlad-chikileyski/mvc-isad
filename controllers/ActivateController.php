<?php

class ActivateController
{
    public function actionIndex($idAds)
    {
        require_once(ROOT . '/views/post/activate.php');
        return true;
    }

    public function actionSuccessregister($idAds)
    {
        require_once(ROOT . '/views/post/register_success.php');
        return true;
    }

}