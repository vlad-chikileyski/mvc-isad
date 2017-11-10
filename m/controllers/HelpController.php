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
        $ACTIVE_FLAG = false;
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

            $query_contact = HelpMobile::contact($username, $useremail, $userphone, $usercity, $usermassage);
            if ($query_contact ) {
                $ACTIVE_FLAG = true;
            }

        }
        require_once(ROOT . '/views/help/contact.php');
        return true;
    }
}


