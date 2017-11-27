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
                    $tableName = $userInfo["TABLE_NAME"];
                    $getAdsIdByUserCreateId = Product::getAdsIdByUserIdAndAdsId($userId, $adsId);
                    if ($getAdsIdByUserCreateId) {
                        $result = Product::userActivateAds($tableName, $userId, $adsId);
                        if ($result) {
                            $disableKeyAndTokenForThisAds = User::disableTokenAndKeyForAds($adsId, $userId, $user_auth_key, $user_auth_token);
                            if ($disableKeyAndTokenForThisAds) {
                                require_once(ROOT . '/views/post/ads_active_success.php');
                            }
                        }
                    } else {
                        header("HTTP/1.0 404 Not Found");
                        require_once(ROOT . '/views/error/404.php');
                    }

                }
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