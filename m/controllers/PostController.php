<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $pattrenPaymentValue = "/(?<=-)[0-9]+$/";
        $category = CategoryFilterMobile::categoryCheckParam($categoryName);
        if ($category == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            if (UserMobile::getUserById(UserMobile::checkId()) != null) {
                $userId = UserMobile::checkId();
                $userInfo = UserMobile::getUserById($userId);
            } else {
                $userInfo = false;
                $userId = false;
            }
            $ACTIVE_FLAG=false;
            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $postcode = $_POST['postcode'];
                $name = $_POST['name'];
                $notVerifyEmail = $_POST['email'];
                $phone = $_POST['phone'];
                $price = $_POST['price'];
                $subcategory = $_POST['subcategory'];
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
                $tableName = CategoryFilterMobile::categoryCheckDoubleParam($categoryName, $subcategory);
                if ($tableName == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                } else {
                    /*GENERATE RANDOM SECURE VALUE - START*/
                    $PAYMENT_ID_TOKEN = RandomSecureMobile::genID();
                    $PAYMENT_KEY_TOKEN = RandomSecureMobile::genKEY();
                    /*END.*/
                    /*GENERATE RANDOM SECURE VALUE - START*/
                    $ADS_ID_TOKEN = RandomSecureMobile::genID();
                    $ADS_KEY_TOKEN = RandomSecureMobile::genKEY();
                    /*END.*/
                    if ($userInfo != false && $userInfo['email'] != '') { //logged User
                        //send {activate your ads}
                        $recordId = PostMobile::save($tableName, $title, $description, $userId, $postcode, $subcategory, '0', $price, $category);
                        if ($recordId != '') {
                            $incrementStatus = CatalogMobile::incrementCountFromCategory($subcategory);
                            $userAddAction = CatalogMobile::postAddAction($userId, $recordId, $tableName, $subcategory);
                            $userTokenDashboardAction = CatalogMobile::postAddInsertTokenDashboard($ADS_ID_TOKEN, $ADS_KEY_TOKEN, $userId, $recordId, $tableName);
                            if ($incrementStatus && $userAddAction && $userTokenDashboardAction) {
                                if (MailBuilderMobile::configureMailForActivateAds($userInfo['email'], $name, $ADS_ID_TOKEN, $ADS_KEY_TOKEN)) {
                                    if (isset($paymentType) && $paymentType != false) {
                                        $paymentInsert = PaymentMobile::updatePaymentInfo($userId, $recordId, $PAYMENT_ID_TOKEN, $PAYMENT_KEY_TOKEN, $tableName, $paymentType);
                                        if ($paymentInsert) {
                                            header("Location: https://adtoday.co.uk/payment/pay/" . $PAYMENT_ID_TOKEN . "/" . $PAYMENT_KEY_TOKEN);
                                            exit();
                                        }
                                    } else {
                                        $ACTIVE_FLAG = true;
                                        require_once(ROOT . '/views/post/add-mobile.php');
                                        exit();
                                    }
                                }
                            }
                        }

                    } else {
                        echo "NO";
                    }
                }


            }
            $paymentsBoxInfo = array();
            $paymentsBoxInfo = PaymentMobile::getAllPayments();
            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMobile::getSubcategyListByCategory($category);
            require_once(ROOT . '/views/post/add-mobile.php');
            return true;
        }


    }

    public function actionCategoryList()
    {

        require_once(ROOT . '/views/post/firststep.php');
        return true;

    }

}