<?php

class PostController
{
    public function actionIndex($pageType)
    {
        require_once(ROOT . '/views/post/create.php');
        return true;
    }
}