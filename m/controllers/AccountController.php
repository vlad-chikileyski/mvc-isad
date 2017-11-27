<?php

class AccountController
{
    public function actionUserPage($userId)
            {
        $allAds=array();
        $user = UserMobile::getUserById($userId);
        $getAdsIdByUserCreateId=array();
        $getAdsIdByUserCreateId = ProductMobile::getAdsIdByUserId($userId);
        $i = 0;
        foreach ($getAdsIdByUserCreateId as $item) {
            $allAds[$i] = ProductMobile::getAdsByCategoryAndUserId($item['subcategory_name'], $item['adsId']);
            $i++;
        }

        require_once(ROOT . '/views/account/user-account.php');
        return true;
    }

    public function actionPanel()
    {
        $userPanelProduct = array();
        $userId = UserMobile::checkLogged();
        $user = UserMobile::getUserById($userId);
        if ($userId == false) {
            header("Location: http://m.adtoday.co.uk/login");
            require_once(ROOT . '/views/login/login-mobile.php');
        } else {
            $getPanelIdByUserCreateId = array();
            $getPanelIdByUserCreateId = ProductMobile::getPanelIdByUserId($userId);
            $user = UserMobile::getUserById($userId);
            require_once(ROOT . '/views/account/panel-account.php');

        }
        return true;
    }

    public function actionUser()
    {
        $userId = UserMobile::checkLogged();
        $user = UserMobile::getUserById($userId);
        if (isset($_POST['change'])) {
            $name_param = $_POST['username'];
            $email_param = $_POST['email'];
            $phone_param = $_POST['phone'];
            $select_box_gender_var = $_POST['gender'];
            $check_box_newsletter_var = $_POST['newsletter'];
            $result = UserMobile::userChange($userId, $name_param, $email_param, $phone_param, $select_box_gender_var, $check_box_newsletter_var);
            header("Location: http://m.adtoday.co.uk/account/user");
        } else {
            $check_box_newsletter_var1 = $user['newsletter'];
            $select_box_gender_var1 = $user['gender'];
            $name = $user['username'];
            $email = $user['email'];
            $phone = $user['phone'];
        }
        require_once(ROOT . '/views/account/form-account.php');
        return true;
    }


    public
    function actionAds()
    {
        $userProduct = array();
        $userId = UserMobile::checkLogged();
        $user = UserMobile::getUserById($userId);
        $getAdsIdByUserCreateId = array();
        $getAdsIdByUserCreateId = ProductMobile::getAdsIdByUserId($userId);
        $i = 0;
        foreach ($getAdsIdByUserCreateId as $item) {
            $userProduct[$i] = ProductMobile::getProductLiszztByTableNameAndAdsId($item["subcategory_name"], $item["adsId"]);
            $i++;
        }

        require_once(ROOT . '/views/account/account-ads.php');
        return true;
    }


    public
    function actionLogin()
    {
        $useremail = '';
        $password = '';
        if (isset($_POST['signIn'])) {
            $useremail = $_POST['useremail'];
            $password = $_POST['password'];

            $errors = false;

            if (!UserMobile::checkName($useremail)) {
                $errors[] = 'Login or password is incorrect.';
            }
            if (!UserMobile::checkPassword($password)) {
                $errors[] = 'Password must be > 5 symbols';
            }
            $userId = UserMobile::checkUserData($useremail, $password);

            if ($userId == false) {
                $errors[] = 'Login or password is incorrect!';
            } else {
                UserMobile::auth($userId);
                header("Location: http://m.adtoday.co.uk/");
            }
        }

        require_once(ROOT . '/views/login/login-mobile.php');
        return true;

    }

    public
    function actionRegister()
    {
        $username = '';
        $password = '';
        $useremail = '';
        $query_registration = false;
        if (isset($_POST['signUp'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $useremail = $_POST['useremail'];

            $errors = false;

            if (!UserMobile::checkName($username)) {
                $errors[] = 'Name must be > 4 symbols';
            }
            if (!UserMobile::checkPassword($password)) {
                $errors[] = 'Password must be > 5 symbols';
            }
            if (!UserMobile::checkEmail($useremail)) {
                $errors[] = 'Invalid email type!';
            }
            if (UserMobile::checkEmailExists($useremail)) {
                $errors[] = 'This email already exists!';
            }
            if ($errors == false) {
                $query_registration = UserMobile::register($username, $useremail, $password);
                if ($query_registration && MailBuilderMobile::configureMailForActivateAccount($useremail, $username)) {
                    header("Location: /activate-account/200");
                }
            }
        }

        require_once(ROOT . '/views/register/register-mobile.php');
        return true;


    }
}