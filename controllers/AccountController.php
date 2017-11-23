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
        foreach ($getAdsIdByUserCreateId as $item) {
            $userProduct[$i] = Product::getProductListByTableNameAndAdsId($item["subcategory_name"], $item["adsId"], $item["category_name"]);
            $i++;
        }
        $email = '';
        $old_password = '';
        $password = '';
        $repeat_password = '';
        $check_box_newsletter_var = '';
        $result = array();
        $ACTIVE_FLAG_PASSWORD = false;
        $ACTIVE_FLAG_EMAIL = false;
        if (isset($_POST['change-password'])) {
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
                        $ACTIVE_FLAG_PASSWORD = true;
                    }

                } else {
                    $errors[] = 'Password do not to match';
                }
            } else {
                $errors[] = 'Old password is not right';
            }
        } else {
            if (isset($_POST['change-email'])) {
                $email = $_POST['email'];
                $check_box_newsletter_var = $_POST['newsletter'];
                $userEmail = User::checkName($email);
                if ($userEmail == true) {
                    $newEmail = User::checkEmail($email);
                    if ($newEmail = true) {
                        $userId = User::checkId();
                        $userInfo = User::getUserById($userId);
                        $result = User::userChangeEmail($userInfo['id'], $email, $check_box_newsletter_var);
                        $ACTIVE_FLAG_EMAIL = true;
                    } else {
                        $error[] = 'Email is not correct';
                    }
                }else {
                    $error[] = 'Empty email';
            }
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