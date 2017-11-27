<?php
require_once(ROOT . '/models/PostMain.php');
require_once(ROOT . '/models/Catalog.php');

class PostController
{
    public function actionIndex($categoryNameParam)
    {
        $pattrenPaymentValue = "/(?<=-)[0-9]+$/";
        $category = CategoryFilter::categoryCheckParamForMainSite($categoryNameParam);
        if ($category == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            if (User::getUserById(User::checkId()) != null) {
                $userId = User::checkId();
                $userInfo = User::getUserById($userId);
            } else {
                $userInfo = false;
                $userId = false;
            }

            if (isset($_POST['submit'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $postcode = $_POST['postcode'];
                $name = $_POST['name'];
                $notVerifyEmail = $_POST['email'];
                $phone = $_POST['phone'];
                $price = $_POST['price'];
                $subcategory = lcfirst($_POST['subcategory']);
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
                $tableName = CategoryFilter::categoryCheckDoubleParam($category, $subcategory);
                if ($tableName == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                } else {
                    /*GENERATE RANDOM SECURE VALUE - START*/
                    $PAYMENT_ID_TOKEN = RandomSecure::genID();
                    $PAYMENT_KEY_TOKEN = RandomSecure::genKEY();
                    /*END.*/
                    /*GENERATE RANDOM SECURE VALUE - START*/
                    $ADS_ID_TOKEN = RandomSecure::genID();
                    $ADS_KEY_TOKEN = RandomSecure::genKEY();
                    /*END.*/
                    if ($userInfo != false && $userInfo['email'] != '') { //logged User
                        //send {activate your ads}
                        $recordId = PostMain::save($tableName, $title, $description, $userId, $postcode, $subcategory, '0', $price, $category);
                        if ($recordId != '') {
                            $incrementStatus = Catalog::incrementCountFromCategory($subcategory);
                            $userAddAction = Catalog::postAddAction($userId, $recordId, $tableName, $subcategory);
                            $userTokenDashboardAction = Catalog::postAddInsertTokenDashboard($ADS_ID_TOKEN, $ADS_KEY_TOKEN, $userId, $recordId,$tableName);
                            if ($incrementStatus && $userAddAction && $userTokenDashboardAction) {
                                if (MailBuilderMain::configureMailForActivateAds($userInfo['email'], $name, $ADS_ID_TOKEN, $ADS_KEY_TOKEN)) {
                                    if (isset($paymentType) && $paymentType != false) {
                                        $paymentInsert = PaymentAdult::updatePaymentInfo($userId, $recordId, $PAYMENT_ID_TOKEN, $PAYMENT_KEY_TOKEN, $tableName, $paymentType);
                                        if ($paymentInsert) {
                                            header("Location: https://adtoday.co.uk/payment/pay/" . $PAYMENT_ID_TOKEN . "/" . $PAYMENT_KEY_TOKEN);
                                            exit();
                                        }
                                    } else {
                                        echo $recordId;
                                        header("Location: https://adtoday.co.uk/activate-ad/200");
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
            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMain::getSubcategyListByCategoryFilter($category);
            $paymentsBoxInfo = array();
            $paymentsBoxInfo = Payment::getAllPayments();
            require_once(ROOT . '/views/post/create.php');
            return true;
        }
    }

    public
    function actionCategoryList()
    {

        require_once(ROOT . '/views/post/firststep.php');
        return true;
    }
}