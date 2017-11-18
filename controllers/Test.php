<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $categoryChecker = CategoryFilter::categoryCheckParam($categoryName);
        if ($categoryChecker == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            /**
             * check userIsLogged?
             * START
             */
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
            /*
             * END
             */
            $title = '';
            $subcategory = '';
            $description = '';
            $postcode = '';
            $name = '';
            $price = '';
            $notVerifyEmail = '';
            $phone = '';
            $result = false;
            $query_registration = false;
            /**
             * Validate & save in DB
             * @return: redirect to success page
             */

            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $postcode = $_POST['postcode'];
                $name = $_POST['name'];
                $notVerifyEmail = $_POST['email'];
                $phone = $_POST['phone'];
                $price = '12';
                $subcategory = lcfirst($_POST['subcategory']);
                $getTableName = CategoryFilter::categoryCheckDoubleParam($categoryName, $subcategory);
                if ($getTableName == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                } else {
                    $errors = false;
                    if (!Post::checkEmail($notVerifyEmail)) {
                        $errors[] = 'Invalid email type!';
                    }
                    if ($errors == false) {
                        echo 1;
                        $ID_TOKEN = RandomSecure::genID();
                        $KEY_TOKEN = RandomSecure::genKEY();
                        if ($userInfo != false && $userInfo['email'] != '') { //logged User
                            $incrementStatus = Catalog::incrementCountFromCategory($getTableName);
                            if (MailBuilder::configureMailForActivateAccount($userInfo['email'], $name)) { //send {activate your ads}
                                $recordId = Post::save($getTableName, $title, $description, $userId, $postcode, $subcategory, '0', $price);
                                if ($recordId != '') {
                                    $incrementStatus = Catalog::incrementCountFromCategory($getTableName);
                                    if ($incrementStatus) {
                                        if (isset($paymentType) && $paymentType != false) {
                                            $paymentInsert = PaymentAdult::updatePaymentInfo($userId, $recordId, $ID_TOKEN, $KEY_TOKEN, $getTableName, $paymentType);
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
                            $thisUserExists = User::checkEmailExists($notVerifyEmail);
                            if ($thisUserExists != true) { //if NOT exists
                                $newPassword = User::generatePassword();
                                $newUserRegister = User::register($name, $notVerifyEmail, $newPassword);
                                $newUserData = User::getUserByEmail($notVerifyEmail);
                                $incrementStatus = Catalog::incrementCountFromCategory($getTableName);
                                if ($newUserRegister && MailBuilder::configureMailForActivateAccount($notVerifyEmail, $name)) {//send some mail_template {Thanks for register - your password and url ads}
                                    $query = Post::save($getTableName, $title, $description, $newUserData['id'], $postcode, $subcategory, '0', $price);
                                    echo 'user success register!';
                                    if ($query && $incrementStatus) {
                                        header("Location: /activate-account/200");
                                    }
                                }
                            } else { //user exists !
                                $userData = User::getUserByEmail($notVerifyEmail);
                                $incrementStatus = Catalog::incrementCountFromCategory($getTableName);
                                if (MailBuilder::configureMailForActivateAccount($notVerifyEmail, $name)) { //send {activate your ads}
                                    $query = Post::save($getTableName, $title, $description, $userData['id'], $postcode, $subcategory, '0', $price);
                                    echo 'user exists but not logged!';
                                    if ($query && $incrementStatus) {
                                        header("Location: /activate-ad/200");
                                    }
                                }
                            }
                        }
                    }
                }


            }
            /**
             * !submit only simple loading
             * @return page
             */
            $paymentsBoxInfo = array();
            $paymentsBoxInfo = Payment::getAllPayments();
            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMain::getSubcategyListByCategoryFilter($categoryChecker);
            require_once(ROOT . '/views/post/create.php');
            return true;
        }
    }

    public function actionCategoryList()
    {

        require_once(ROOT . '/views/post/firststep.php');
        return true;
    }
}