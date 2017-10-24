<?php

class UsersController
{
    public function actionAllusers()
    {

        $getAllUsers = array();
        $getAllUsers = User::getAllUser();
        require_once(ROOT . '/views/users/all-users.php');
        return true;
    }

    public function actionSingle($userID)
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

       /* $getFavAdsByUserCreateId = array();
        $getFavAdsByUserCreateId = Product::getFavAdsByCreatedUserId($userId);
        $r = 0;
        foreach ($getFavAdsByUserCreateId as $favItem) {
            $userFavAd[$r] = Product::getFavAdsListByTableNameAndAdsId($favItem["subcategory_name"], $favItem["ads_id"], $favItem["category_name"]);
            $r++;
        }*/
        
        require_once(ROOT . '/views/users/single-user.php');
        return true;
    }

}