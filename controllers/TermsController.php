<?php

class TermsController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/terms/terms.php');
        return true;
    }
}