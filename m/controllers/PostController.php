<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $categoryChecker = CategoryFilterMobile::categoryCheckParam($categoryName);
        if ($categoryChecker == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            if (UserMobile::getUserById(UserMobile::checkId()) != null) {
                $userId = UserMobile::checkId();
                $userInfo = UserMobile::getUserById($userId);

            } else {
                $userInfo = false;
                $userId = false;
            }

            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMobile::getSubcategyListByCategory($categoryName);
            require_once(ROOT . '/views/post/add-mobile.php');
            return true;
        }


    }

    public
    function actioncategoryList()
    {
        require_once(ROOT . '/views/post/firststep.php');
        return true;

    }

}