<?php

class AccountController
{

    public function actionIndex()
    {
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        $getAdsIdByUserCreateId = array();
        $getAdsIdByUserCreateId = Product::getAdsIdByUserId($userId);
        foreach ($getAdsIdByUserCreateId as $item){
            echo $item["adsId"];
        }
        require_once(ROOT . '/views/account/index.php');
        return true;
    }
}