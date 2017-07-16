<?php

class PostController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/post/create.php');
        return true;
    }
}