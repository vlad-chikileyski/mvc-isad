<?php

class UserController
{
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header("Location: /");
    }
    public function actionAccount($userId)
    {
        $allAds=array();
        $user = User::getUserById($userId);
        $getAdsIdByUserCreateId=array();
        $getAdsIdByUserCreateId = Product::getAdsIdByUserId($userId);
        $i = 0;
        foreach ($getAdsIdByUserCreateId as $item) {
            $allAds[$i] = Product::getAdsByCategoryAndUserId($item['subcategory_name'], $item['adsId']);
            $i++;
        }
        require_once(ROOT .'/views/account/user-account.php');
        return true;
    }
}