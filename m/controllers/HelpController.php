<?php

class HelpController
{
    public function actionPassword()
    {
        $useremail = '';
        $password = '';
        if (isset($_POST['signIn'])) {
            $useremail = $_POST['useremail'];
            $password = $_POST['password'];

            $errors = false;

            if (!UserMobile::checkName($useremail)) {
                $errors[] = 'Login or email  is incorrect.';
            }
            /* if (!UserMobile::checkPassword($password)) {
                 $errors[] = 'Password must be > 5 symbols';
             }*/
            /* $userId = UserMobile::checkUserData($useremail, $password);

             if ($userId == false) {
                 $errors[] = 'Login or password is incorrect!';
             } else {
                 UserMobile::auth($userId);
                 header("Location: http://m.adtoday.co.uk/");
             }*/
        }

        require_once(ROOT . '/views/login/password-mobile.php');
        return true;

    }

    public function actionContact()
    {
        $username = '';
        $useremail = '';
        $userphone = '';
        $usercity = '';
        $usermassage = '';
        $query_contact = false;
        if (isset($_POST['contactUs'])) {
            $username = $_POST['username'];
            $useremail = $_POST['useremail'];
            $userphone = $_POST['userphone'];
            $usercity = $_POST['usercity'];
            $usermassage = $_POST['usermassage'];

            $errors = false;
            if ($errors == false) {
                $query_contact = HelpMobile::contact($username, $useremail, $userphone, $usercity, $usermassage);
                if ($query_contact && MailBuilderMobile::configureMailForContact($username, $useremail, $userphone, $usercity, $usermassage)) {
                    header("Location: /activate-account/200");
                }
            }
            require_once(ROOT . '/views/help/contact.php');
            return true;
        }
    }
}


