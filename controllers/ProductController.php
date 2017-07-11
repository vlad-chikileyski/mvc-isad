<?php

class ProductController
{
    public function actionView($id)
    {
        require_once(ROOT.'/views/product/view.php');
        return true;
    }
}