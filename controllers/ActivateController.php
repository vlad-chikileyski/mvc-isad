<?php

class ActivateController
{
    public static function actionMailUrlActivateAds($user_auth_key, $user_auth_token)
    {
        if (isset($user_auth_key) && isset($user_auth_token)) {
            $user = User::checkIdAndTokenForActivAds($user_auth_key, $user_auth_token);
            if ($user == false) {
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            } else {
                $userInfo = User::getUserIdByTokenAndId($user_auth_key, $user_auth_token);
                if ($userInfo == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                } else {
                    $userId = $userInfo["USER_ID"];
                    $adsId = $userInfo["USER_ADS_ID"];
                    $getAdsIdByUserCreateId = Product::getAdsIdByUserIdAndAdsId($userId, $adsId);
                    $tableName = $getAdsIdByUserCreateId["subcategory_name"];
                    if ($getAdsIdByUserCreateId) {
                        $result = Product::userActivateAds($tableName, $userId, $adsId);
                        if ($result) {
                            $disableKeyAndTokenForThisAds = User::disableTokenAndKeyForAds($adsId, $userId, $user_auth_key, $user_auth_token);
                            var_dump($disableKeyAndTokenForThisAds);
                            echo "OK!";
                        }
                    } else {
                        header("HTTP/1.0 404 Not Found");
                        require_once(ROOT . '/views/error/404.php');
                    }

                }
                /* $password = '';
                 $repeat_password = '';
                 $result = array();
                 $ACTIVE_FLAG = false;
                 if (isset($_POST['change'])) {
                     $password = $_POST['password'];
                     $repeat_password = $_POST['repeat-password'];
                     if ($password == $repeat_password) {
                         if (!UserMobile::checkPassword($password)) {
                             $errors[] = 'Password must be > 5 symbols';
                         } else {
                             $result = UserMobile::userChangePassword($userId, $password);
                             if ($result == true) {
                                 $token_password = 1;
                                 $token = UserMobile::userChangeToken($userId, $token_password);
                             }
                             if ($token = true) {
                                 $delete_key = UserMobile::userDeleteKey($userId);
                                 $ACTIVE_FLAG = true;
                             }
                         }
                     } else {
                         $errors[] = 'Passwords do not match';
                     }
                 }
                 require_once(ROOT . '/views/login/change_password-mobile.php');
             }*/
            }

        }


        return true;
    }

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

    public function actionSuccesspayments($idAds)
    {
        require_once(ROOT . '/views/post/success_payments.php');
        return true;
    }

}