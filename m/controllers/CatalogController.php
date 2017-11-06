<?php

class  CatalogController
{
    public function actionDouble($urlParam, $urlSubParam, $page = 1)
    {
        $categoryExistDoubleParamName = CategoryMobile::categoryCheckDoubleParam($urlParam, $urlSubParam);
        if ($categoryExistDoubleParamName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryProducts = array();
            $categoryProducts = ProductMobile::getProductListByCategory($urlParam, $categoryExistDoubleParamName, $page);
            $total = ProductMobile::getTotalProductsInCategory($categoryExistDoubleParamName);
            $pagination = new Pagination($total, $page, ProductMobile::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT . '/views/catalog/product-small-list.php');
            return true;
        }
    }
}