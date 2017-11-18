<?php

class PostController
{
    public function actionIndex($categoryNameParam)
    {
        $category = CategoryFilter::categoryCheckParam($categoryNameParam);
        if ($category == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMain::getSubcategyListByCategoryFilter($category);
            $paymentsBoxInfo = array();
            $paymentsBoxInfo = PaymentAdult::getAllPayments();
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