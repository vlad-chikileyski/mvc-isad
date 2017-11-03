<?php

class AccountController
{

    public function actionLogin()
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

}