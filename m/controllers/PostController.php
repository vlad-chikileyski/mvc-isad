<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $categoryChecker = CategoryFilterMobile::categoryCheckParam($categoryName);
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
            if (UserMobile::getUserById(UserMobile::checkId()) != null) {
                $userId = UserMobile::checkId();
                $userInfo = UserMobile::getUserById($userId);

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
                $getTableName = CategoryMain::categoryCheckDoubleParam($categoryName, $subcategory);
                if ($getTableName == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                } else {
                    $errors = false;
                    if (!PostMobile::checkEmail($notVerifyEmail)) {
                        $errors[] = 'Invalid email type!';
                    }
                    if ($errors == false) {
                        echo 1;
                        $ID_TOKEN = RandomSecure::genID();
                        $KEY_TOKEN = RandomSecure::genKEY();
                        if ($userInfo != false && $userInfo['email'] != '') { //logged User
                            $incrementStatus = CatalogMobile::incrementCountFromCategory($getTableName);
                            if (MailBuilderMobile::configureMailForActivateAccount($userInfo['email'], $name)) { //send {activate your ads}
                                $recordId = PostMobile::save($getTableName, $title, $description, $userId, $postcode, $subcategory, '0', $price);
                                if ($recordId != '') {
                                    $incrementStatus = CatalogMobile::incrementCountFromCategory($getTableName);
                                    if ($incrementStatus) {
                                        if (isset($paymentType) && $paymentType != false) {
                                            $paymentInsert = PaymentMobile::updatePaymentInfo($userId, $recordId, $ID_TOKEN, $KEY_TOKEN, $getTableName, $paymentType);
                                            if ($paymentInsert) {
                                                header("Location: https://adtoday.co.uk/payment/pay/" . $ID_TOKEN . "/" . $KEY_TOKEN);
                                                exit();
                                            }
                                        } else {
                                            echo $recordId;
/*                                            header("Location: https://adtoday.co.uk/activate-ad/200");*/
                                        }
                                    }
                                }
                            }
                        } else { // Not logged
                            $thisUserExists = UserMobile::checkEmailExists($notVerifyEmail);
                            if ($thisUserExists != true) { //if NOT exists
                                $newPassword = UserMobile::generatePassword();
                                $newUserRegister = UserMobile::register($name, $notVerifyEmail, $newPassword);
                                $newUserData = UserMobile::getUserByEmail($notVerifyEmail);
                                $incrementStatus = CatalogMobile::incrementCountFromCategory($getTableName);
                                if ($newUserRegister && MailBuilderMobile::configureMailForActivateAccount($notVerifyEmail, $name)) {//send some mail_template {Thanks for register - your password and url ads}
                                    $query = PostMobile::save($getTableName, $title, $description, $newUserData['id'], $postcode, $subcategory, '0', $price);
                                    echo 'user success register!';
                                    if ($query && $incrementStatus) {
                                        header("Location: /activate-account/200");
                                    }
                                }
                            } else { //user exists !
                                $userData = UserMobile::getUserByEmail($notVerifyEmail);
                                $incrementStatus = CatalogMobile::incrementCountFromCategory($getTableName);
                                if (MailBuilderMobile::configureMailForActivateAccount($notVerifyEmail, $name)) { //send {activate your ads}
                                    $query = PostMobile::save($getTableName, $title, $description, $userData['id'], $postcode, $subcategory, '0', $price);
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

            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMobile::getSubcategyListByCategory($categoryName);
            require_once(ROOT . '/views/post/add-mobile.php');
            return true;
        }


    }

    public
    function actioncategoryList()
    {

        require_once(ROOT . '/views/post/firststep.php');
        return true;

    }

}