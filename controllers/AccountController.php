<?php

class AccountController
{

    public function actionIndex()
    {
        $userProduct = array();
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        $getAdsIdByUserCreateId = array();
        $getAdsIdByUserCreateId = Product::getAdsIdByUserId($userId);
        $i = 0;
        foreach ($getAdsIdByUserCreateId as $item){
            $userProduct[$i] = Product::getProductListByTableNameAndAdsId($item["subcategory_name"], $item["adsId"], $item["category_name"]);
            $i++;
        }
        require_once(ROOT . '/views/account/index.php');
        return true;
    }
}