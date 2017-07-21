<?php

class ProductController
{
    public function actionView($categoryParam, $subcategoryParam, $productId)
    {
        $getTableNameProduct = Category::categoryCheckDoubleParam($categoryParam, $subcategoryParam);
        if ($getTableNameProduct == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryProduct = array();
            $categoryProduct = Product::getProductById($getTableNameProduct, $productId, $categoryParam, $subcategoryParam);
            require_once(ROOT . '/views/product/view.php');
            return true;
        }
    }
}