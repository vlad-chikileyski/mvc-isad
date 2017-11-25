<?php

class EditController
{
    public function actionIndex($adsId)
    {

        $userId = UserMobile::checkLogged();
        $user = UserMobile::getUserById($userId);
        if ($userId === false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $getTableBySubcatName = array();
            $getAdsIdByUserCreateId = ProductMobile::getAdsIdByUserIdAndAdsId($userId, $adsId);
            $getTableBySubcatName = ProductMobile::getTableBySubcatName($getAdsIdByUserCreateId, $userId, $adsId);
            $title = '';
            $description = '';
            $result = array();
            if (isset($_POST['createAds'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $result = UserMobile::userChangeAdsInfo($getAdsIdByUserCreateId, $title, $description, $userId, $adsId);
                header("Location: http://m.adtoday.co.uk/my-ads/edit/" . $adsId);
            }
            $paymentsBoxInfo = array();
            $paymentsBoxInfo = PaymentMobile::getAllPayments();
            require_once(ROOT . '/views/post/myads.php');
        }
        return true;
    }
}