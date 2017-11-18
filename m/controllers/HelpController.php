<?php

class HelpController
{
    public function actionChangePasswordUser()
    {

        $password = '';
        $repeat_password = '';
        $result = array();
        $ACTIVE_FLAG = false;
        if (isset($_POST['reset'])) {
            $password = $_POST['password'];
            $repeat_password = $_POST['repeat-password'];
            if ($password == $repeat_password) {
                if (!UserMobile::checkPassword($password)) {
                    $errors[] = 'Password must be > 5 symbols';
                } else {
                    $userId = UserMobile::checkId();
                    $userInfo = UserMobile::getUserById($userId);
                    $result = UserMobile::userChangePassword($userInfo['id'], $password);
                    $ACTIVE_FLAG = true;
                }
            } else {
                $errors[] = 'Passwords do not match';
            }
        }
        require_once(ROOT . '/views/login/change_password_if_user_loged-mobile.php');
        return true;
    }


    public
    function actionChangePassword($key, $token)
    {
        if (isset($key) && isset($token)) {
            $user = UserMobile::checkToken($key, $token);
            if ($user == false) {
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            } else {
                $userId = UserMobile::getUserIdByToken($key, $token);
                if ($userId == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                } else {
                    $password = '';
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
                }
            }

        }


        return true;

    }

    public
    function actionPassword()
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
                $ID_TOKEN = RandomSecureMobile::genID();
                $KEY_TOKEN = RandomSecureMobile::genKEY();
                $delete_key = UserMobile::generateToken($username['id'], $ID_TOKEN, $KEY_TOKEN);
                MailBuilderMobile::configureMailForChangePassword($usermail, $username['username'], $ID_TOKEN, $KEY_TOKEN);
                $ACTIVE_FLAG = true;
            }
        }


        require_once(ROOT . '/views/login/password-mobile.php');
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


