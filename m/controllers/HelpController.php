<?php

class HelpController
{
    public function actionPassword()
    {
        $usermail = '';
        $result = false;
        $ACTIVE_FLAG = false;
        if (isset($_POST['chekPass'])) {
            $usermail = $_POST['usermail'];

            $errors = false;
            if (!UserMobile::checkEmail($usermail)) {
                $errors[] = 'Invalid email type!';
            }
            if (UserMobile::checkEmailExists($usermail)) {
                $username = array();
                $username = UserMobile::getUserByEmail($usermail);
                 MailBuilderMobile::configureMailForChangePassword($usermail, $username['username']);
                $ACTIVE_FLAG = true;
            }
        }


require_once (ROOT . '/views/login/password-mobile.php');
return true;

}

public
function actionContact()
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
        if ($query_contact) {
            $ACTIVE_FLAG = true;
        }

    }
    require_once(ROOT . '/views/help/contact.php');
    return true;
}
}


