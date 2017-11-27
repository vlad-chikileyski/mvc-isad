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
        $allAds = array();
        $user = User::getUserById($userId);
        $getAdsIdByUserCreateId = array();
        $getAdsIdByUserCreateId = Product::getAdsIdByUserId($userId);
        $i = 0;
        foreach ($getAdsIdByUserCreateId as $item) {
            $allAds[$i] = Product::getAdsByCategoryAndUserId($item['subcategory_name'], $item['adsId']);
            $i++;
        }
        require_once(ROOT . '/views/account/user-account.php');
        return true;
    }

    public function actionContact($userId)
    {
        $ACTIVE_FLAG = false;
        $username = '';
        $email = '';
        $title = '';
        $comment = '';
        $allAds = array();
        $userLog=User::checkLogged();
        $userName=User::getUserById($userLog);
        $user = User::getUserById($userId);
        if (isset($_POST['contactUser'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $title = $_POST['title'];
            $comment = $_POST['comment'];
            $errors = false;
            if (!User::checkName($username)) {
                $errors[] = 'Name is too short';
            } else {
                MailBuilderMain::configureMailForContact($username, $email,$title,$comment,$user['email']);
                $ACTIVE_FLAG = true;
            }

        }

        require_once(ROOT . '/views/account/user-contact.php');
        return true;
    }
}