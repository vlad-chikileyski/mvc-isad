<?php

class SeoController
{

    public function actionTitle()
    {
        require_once(ROOT . '/views/seo/seo-title.php');
        return true;
    }
    public function actionDescription()
    {
        require_once(ROOT . '/views/seo/seo-desc.php');
        return true;
    }

    public function actionKeywords()
    {
        require_once(ROOT . '/views/seo/seo-keywords.php');
        return true;
    }
}