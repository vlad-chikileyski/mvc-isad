<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $formType = Category::categoryCheck($categoryName);

        if ($formType == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $FORM_PAGE_HTML = Form::getFormByCategoryName($formType);
            if ($FORM_PAGE_HTML != false) {
                /**
                 * postMethod
                 */
                $title = '';
                $adtype = '';
                $description = '';
                $gender = '';
                $ethnicity = '';
                $itemAgeValue = '';
                $language = array();
                $interests = array();
                $servfor = array();
                $col1incallrow1 = '';
                $col2outcallrow1 = '';
                $col1incallrow2 = '';
                $col2outcallrow2 = '';
                $col1incallrow3 = '';
                $col2outcallrow3 = '';
                $col1incallrow4 = '';
                $col2outcallrow4 = '';
                $col1incallrow5 = '';
                $col2outcallrow5 = '';
                $col1incallrow6 = '';
                $col2outcallrow6 = '';
                $postcode = '';
                $name = '';
                $email = '';
                $phone = '';
                $paymentMethod = '';
                if (isset($_POST['submit'])) {
                    $title = $_POST['title'];
                    $adtype = $_POST['adtype'];
                    $description = $_POST['description'];
                    $gender = $_POST['gender'];
                    $ethnicity = $_POST['ethnicity'];
                    $itemAgeValue = $_POST['item-age-value'];
                    /**
                     * Array Start
                     */
                    $language = $_POST['language'];
                    $interests = $_POST['interests'];
                    $servfor = $_POST['servfor'];
                    /**
                     * Array End
                     */
                    $col1incallrow1 = $_POST['col-1-incall-row-1'];
                    $col2outcallrow1 = $_POST['col-2-outcall-row-1'];
                    $col1incallrow2 = $_POST['col-1-incall-row-2'];
                    $col2outcallrow2 = $_POST['col-2-outcall-row-2'];
                    $col1incallrow3 = $_POST['col-1-incall-row-3'];
                    $col2outcallrow3 = $_POST['col-2-outcall-row-3'];
                    $col1incallrow4 = $_POST['col-1-incall-row-4'];
                    $col2outcallrow4 = $_POST['col-2-outcall-row-4'];
                    $col1incallrow5 = $_POST['col-1-incall-row-5'];
                    $col2outcallrow5 = $_POST['col-2-outcall-row-5'];
                    $col1incallrow6 = $_POST['col-1-incall-row-6'];
                    $col2outcallrow6 = $_POST['col-2-outcall-row-6'];
                    $postcode = $_POST['postcode'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $paymentMethod = $_POST['payment-method'];
                    var_dump($servfor);





                    $paymentType = DictionaryItem::checkPaymentType($paymentMethod);
                    /**
                     * Update DataBase and Generate
                     * id=*********&key**********
                     * CREATE SECURITY FILTER!!!
                     */
                    $paymentOperationId = "908765";
                    $keyOperationId = "874654";
                    // header('Location: /payment/pay/' . $paymentOperationId . '/' . $keyOperationId);
                    // exit;
                }
                require_once(ROOT . '/views/post/create.php');
                return true;
            } else {
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            }
        }
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