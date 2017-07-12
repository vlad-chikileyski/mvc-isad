<?php
include_once ROOT . '/models/Product.php';
include_once ROOT . '/components/Pagination.php';


class  CatalogController
{

    public function actionIndex($categoryName, $page = 1)
    {
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryName, $page);

        $total = Product::getTotalProductsInCategory($categoryName);
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/catalog.php');
        return true;
    }
}