<?php

class  CatalogController
{
    public function actionIndex($categoryName, $page = 1)
    {
        $categoryExistName = CategoryFilter::categoryCheckParam($categoryName);
        if ($categoryExistName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMain::getSubcategyListByCategory($categoryExistName);
            $sqlSelect = CategoryMain::getSqlUnionForSuperCategory($categoryName);
            if ($sqlSelect != false) {
                $categoriesProducts = array();
                $categoriesProducts = Product::getProductsListByCategory($sqlSelect, $page);
                $total = Product::getProductCountBySearchCriteriaSingleParam($sqlSelect);
                $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
                require_once(ROOT . '/views/catalog/catalog.php');
            } else {
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            }
            return true;
        }
    }

    public function actionDouble($urlParam, $urlSubParam, $page = 1)
    {
        $categoryExistDoubleParamName = CategoryFilter::categoryCheckDoubleParam($urlParam, $urlSubParam);
        if ($categoryExistDoubleParamName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryForList= CategoryFilter::categoryCheckParam($urlParam);
            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMain::getSubcategyListByCategory($categoryForList);
            $categoryProducts = array();
            $categoryProducts = Product::getProductListByCategory($categoryExistDoubleParamName, $page);
            $total = Product::getTotalProductsInCategory($categoryExistDoubleParamName);
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT . '/views/catalog/sub-catalog.php');
            return true;
        }
    }
}