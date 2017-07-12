<?php

include_once ROOT.'/models/Product.php';

class SiteController
{

    public function actionIndex()
    {
        require_once(ROOT.'/views/site/index.php');
        return true;
    }
}