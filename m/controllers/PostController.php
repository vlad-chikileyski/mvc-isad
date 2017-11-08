<?php

class PostController
{
    public function actionIndex($subcategory){
        echo $subcategory;
        return true;
    }
    public function actioncategoryList()
    {
            require_once(ROOT . '/views/post/firststep.php');
        return true;

    }
}