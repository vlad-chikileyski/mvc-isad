<?php

class  CatalogController
{
    public function actionIndex($categoryName, $page = 1)
    {
        $categoryExistName = CategoryVehicle::categoryCheck($categoryName);
        if ($categoryExistName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryVehicle::getSubcategyListByCategory($categoryExistName);
            $categoriesProducts = array();
            $categoriesProducts = ProductVehicle::getProductsListByCategory($categoryExistName, $page);
            $total = ProductVehicle::getTotalProductsInAllCategory($categoryExistName);
            $pagination = new Pagination($total, $page, ProductVehicle::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT . '/views/catalog/catalog.php');
            return true;
        }
    }

    public function actionDouble($urlParam, $urlSubParam, $page = 1)
    {
        $categoryExistDoubleParamName = CategoryVehicle::categoryCheckDoubleParam($urlParam, $urlSubParam);
        if ($categoryExistDoubleParamName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryProducts = array();
            $categoryProducts = ProductVehicle::getProductListByCategory($urlParam, $categoryExistDoubleParamName, $page);
            $total = ProductVehicle::getTotalProductsInCategory($categoryExistDoubleParamName);
            $pagination = new Pagination($total, $page, ProductVehicle::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT . '/views/catalog/sub-catalog.php');
            return true;
        }
    }
}