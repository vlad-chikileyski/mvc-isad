<?php

class SiteController
{

    public function actionIndex()
    {
        require_once(ROOT . '/views/site/lock.php');
        return true;
    }
}