<?php

class  CatalogController
{

    public function actionIndex($categoryName, $page = 1)
    {
        $categoryChecker = Category::categoryCheck($categoryName);

        if ($categoryChecker == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $subCategoryListMenu = array();
            $subCategoryListMenu = Category::getSubcategyListByCategory($categoryName);
            
            $categoryProducts = array();
            $categoryProducts = Product::getProductsListByCategory($categoryChecker, $page);

            $total = Product::getTotalProductsInCategory($categoryChecker);
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

            require_once(ROOT . '/views/catalog/catalog.php');
            return true;
        }
    }

    public function actionDouble($urlParam, $urlSubParam, $page = 1)
    {
        $categoryChecker = Category::categoryCheckTree($urlParam, $urlSubParam);
        
        if ($categoryChecker == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryProducts = array();
            $categoryProducts = Product::getProductsListByCategory($categoryChecker, $page);

            $total = Product::getTotalProductsInCategory($categoryChecker);
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

            require_once(ROOT . '/views/catalog/sub-catalog.php');
            return true;
        }
    }
}