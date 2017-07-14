<?php

class ProductController
{
    public function actionView($productId)
    {
        $product = Product::getProductById($productId);
        require_once(ROOT.'/views/product/view.php');
        return true;
    }
}