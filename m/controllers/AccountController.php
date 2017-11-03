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

    public function actionRegister()
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
                if ($query_registration &&  MailBuilderMobile::configureMailForActivateAccount($useremail, $username)) {
                    header("Location: /activate-account/200");
                }
            }
        }

        require_once(ROOT . '/views/register/register-mobile.php');
        return true;


    }
}