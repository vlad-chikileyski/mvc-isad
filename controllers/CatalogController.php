<?php

class  CatalogController
{
    public function actionIndex($categoryName, $page = 1)
    {
        $categoryExistName = Category::categoryCheck($categoryName);
        if ($categoryExistName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $subCategoryListMenu = array();
            $subCategoryListMenu = Category::getSubcategyListByCategory($categoryExistName);
            $categoriesProducts = array();
            $categoriesProducts = Product::getProductsListByCategory($categoryExistName, $page);
            $total = Product::getTotalProductsInAllCategory($categoryExistName);
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT . '/views/catalog/catalog.php');
            return true;
        }
    }

    public function actionDouble($urlParam, $urlSubParam, $page = 1)
    {
        $categoryExistDoubleParamName = Category::categoryCheckDoubleParam($urlParam, $urlSubParam);
        if ($categoryExistDoubleParamName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryProducts = array();
            $categoryProducts = Product::getProductListByCategory($urlParam, $categoryExistDoubleParamName, $page);
            $total = Product::getTotalProductsInCategory($categoryExistDoubleParamName);
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT . '/views/catalog/sub-catalog.php');
            return true;
        }
    }
}