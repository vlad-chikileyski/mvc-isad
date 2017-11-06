<?php
require_once(ROOT . '/models/PaymentAdult.php');
require_once(ROOT . '/models/Catalog.php');

class PostController
{
    public function actionIndex($categoryName)
    {
        $pattrenPaymentValue = "/(?<=-)[0-9]+$/";
        $formType = Category::categoryCheck($categoryName);

        if ($formType == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $FORM_PAGE_HTML = Form::getFormByCategoryName($formType);
            $POST_METHOD_NAME = Form::getPostFormMethodNameByCatName($formType);
            if ($FORM_PAGE_HTML != false) {
                $userInfo = '';
                $userId = '';
                $newUserEmail = '';
                if (User::getUserById(User::checkId()) != null) {
                    $userId = User::checkId();
                    $userInfo = User::getUserById($userId);
                } else {
                    $userInfo = false;
                    $userId = false;
                }
                $postcode = '';
                $name = '';
                $email = '';
                $phone = '';
                $paymentMethod = '';
                if (isset($_POST['submit'])) {

                    $postcode = $_POST['postcode'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    if (isset($_POST['payment-method'])) {
                        $paymentMethod = $_POST['payment-method'];
                        preg_match($pattrenPaymentValue, $paymentMethod, $matches, PREG_OFFSET_CAPTURE);
                        if (isset($matches[0][0])) {
                            //CHANGE IT -> next release
                            $paymentType = $matches[0][0];
                            print_r($matches[0][0]);
                        } else {
                            $paymentType = false;
                        }
                    }
                    $tableName = Category::categoryGetTableName($formType);
                    if ($tableName == false) {
                        header("HTTP/1.0 404 Not Found");
                        require_once(ROOT . '/views/error/404.php');
                    } else {

                        $errors = false;
                        if (!Post::checkEmail($email)) {
                            $errors[] = 'Invalid email type!';
                        }
                        if ($errors == false) {
                            $ID_TOKEN = RandomSecure::genID();
                            $KEY_TOKEN = RandomSecure::genKEY();
                            if ($userInfo != false && $userInfo['email'] != '') { //logged User
                                if (MailBuilder::configureMailForActivateAccount($userInfo['email'], $name)) { //send {activate your ads}
                                    $recordId = Form::$POST_METHOD_NAME($userId, $tableName, $_POST, $postcode, $name, $userInfo['email'], $phone, $paymentType);
                                    if ($recordId != '') {
                                        $incrementStatus = Catalog::incrementCountFromCategory($tableName);
                                        if ($incrementStatus) {
                                            if (isset($paymentType) && $paymentType!=false) {
                                                $paymentInsert = PaymentAdult::updatePaymentInfo($userId, $recordId, $ID_TOKEN, $KEY_TOKEN, $tableName, $paymentType);
                                                if ($paymentInsert) {
                                                    header("Location: https://adtoday.co.uk/payment/pay/" . $ID_TOKEN . "/" . $KEY_TOKEN);
                                                    exit();
                                                }
                                            } else {
                                                echo $recordId;
                                                header("Location: https://adtoday.co.uk/activate-ad/200");
                                            }
                                        }
                                    }
                                }
                            } else { // Not logged
                                $thisUserExists = User::checkEmailExists($email);
                                if ($thisUserExists != true) { //if NOT exists
                                    $newPassword = User::generatePassword();
                                    $newUserRegister = User::register($name, $email, $newPassword);
                                    $newUserData = User::getUserByEmail($email);
                                    $incrementStatus = Catalog::incrementCountFromCategory($tableName);
                                    if ($newUserRegister && MailBuilder::configureMailForActivateAccount($email, $name)) {//send some mail_template {Thanks for register - your password and url ads}
                                        $recordId = Form::$POST_METHOD_NAME($newUserData['id'], $tableName, $_POST, $postcode, $name, $userInfo['email'], $phone, $paymentType);
                                        echo 'user success register!';
                                        if ($recordId != '' && $incrementStatus) {
                                            header("Location: /activate-account/200");
                                        }
                                    }
                                } else { //user exists !
                                    $userData = User::getUserByEmail($email);
                                    $incrementStatus = Catalog::incrementCountFromCategory($tableName);
                                    if (MailBuilder::configureMailForActivateAccount($email, $name)) { //send {activate your ads}
                                        $recordId = Form::$POST_METHOD_NAME($userData['id'], $tableName, $_POST, $postcode, $name, $userInfo['email'], $phone, $paymentType);
                                        echo 'user exists but not logged!';
                                        if ($recordId != '' && $incrementStatus) {
                                            header("Location: /activate-ad/200");
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                $paymentsBoxInfo = array();
                $paymentsBoxInfo = PaymentAdult::getAllPayments();
                require_once(ROOT . '/views/post/create.php');
                return true;
            } else {
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            }
        }
    }

    public function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        return $str;
    }

    /**
     * PAGE: Select main category ads {Pre - selector}
     */
    public function actionCategoryList()
    {
        require_once(ROOT . '/views/post/firststep.php');
        return true;
    }
}