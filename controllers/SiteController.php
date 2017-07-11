<?php

include_once ROOT.'/models/Product.php';

class SiteController
{

    public function actionIndex()
    {
        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(3);

        require_once(ROOT.'/views/site/index.php');
        return true;
    }
}