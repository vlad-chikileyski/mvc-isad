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
        $old_password='';
        $password = '';
        $repeat_password = '';
        $result = array();
        if(isset($_POST['change-password'])) {
            $old_password = $_POST['old-password'];
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat-password'];
            $userId = User::checkId();
            $userInfo = User::getUserById($userId);
            if ($userInfo['password'] == $old_password) {
                if ($password == $repeat_password) {
                    if (!User::checkPassword($password)) {
                        $errors[] = 'Password must to be > 5 symbols';
                    } else {
                        $result = User::userChangePassword($userInfo['id'], $password);
                    }

                } else {
                    $errors[] = 'Password do not to match';
                }
            }else{
                $errors[] = 'Old password is not right';
            }
        }

     /*   $getFavAdsByUserCreateId = array();
        $getFavAdsByUserCreateId = Product::getFavAdsByCreatedUserId($userId);
        $r = 0;
        foreach ($getFavAdsByUserCreateId as $favItem) {
            $userFavAd[$r] = Product::getFavAdsListByTableNameAndAdsId($favItem["subcategory_name"], $favItem["ads_id"], $favItem["category_name"]);
            $r++;
        }*/
        require_once(ROOT . '/views/account/index.php');
        return true;

    }
}