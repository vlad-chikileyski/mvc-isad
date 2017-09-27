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
                if (isset($_POST['submit'])) {
                    $paymentMethod = $_POST['payment-method-test'];
                    $paymentType = DictionaryItem::checkPaymentType($paymentMethod);
                    /**
                     * Update DataBase and Generate
                     * id=*********&key**********
                     * CREATE SECURITY FILTER!!!
                     */
                    $paymentOperationId = "908765";
                    $keyOperationId = "874654";
                    header('Location: /payment/pay/' . $paymentOperationId . '/' . $keyOperationId);
                    exit;
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