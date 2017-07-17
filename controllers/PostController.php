<?php

class PostController
{
    public function actionIndex($pageType)
    {
        switch ($pageType){
            case 'electronics': echo 'electronics'; break;
            case '': echo ''; break;
            case '': echo ''; break;
            case '': echo ''; break;
            case '': echo ''; break;
        }
        require_once(ROOT . '/views/post/create.php');
        return true;
    }
}