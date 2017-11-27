<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $pattrenPaymentValue = "/(?<=-)[0-9]+$/";
        $categoryChecker = CategoryFilterMobile::categoryCheckParam($categoryName);
        if ($categoryChecker == false) {
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
                $title = $_POST['title'];
                $description = $_POST['description'];
                $postcode = $_POST['postcode'];
                $name = $_POST['name'];
                $subcategory = lcfirst($_POST['subcategory']);
            }
            $paymentsBoxInfo = array();
            $paymentsBoxInfo = PaymentMobile::getAllPayments();

            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMobile::getSubcategyListByCategory($categoryChecker);
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