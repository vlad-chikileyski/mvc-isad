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
                    $ID_TOKEN = RandomSecure::genID();
                    $KEY_TOKEN = RandomSecure::genKEY();
                    /*END.*/
                    if ($userInfo != false && $userInfo['email'] != '') { //logged User
                        if (MailBuilder::configureMailForActivateAccount($userInfo['email'], $name)) { //send {activate your ads}
                            $recordId = PostMain::save($tableName, $title, $description, $userId, $postcode, $subcategory, '0', $price, $category);
                            if ($recordId != '') {
                                $incrementStatus = Catalog::incrementCountFromCategory($subcategory);
                                if ($incrementStatus) {
                                    if (isset($paymentType) && $paymentType != false) {
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