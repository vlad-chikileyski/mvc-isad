<?php
include_once  ROOT.'/models/Product.php';

class  CatalogController
{
    public function actionIndex($categoryName)
    {
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryName);

        require_once (ROOT.'/views/catalog/catalog.php');
        return true;
    }
}