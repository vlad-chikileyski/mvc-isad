<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $pattrenPaymentValue = "/(?<=-)[0-9]+$/";
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
            if(isset($_POST['create'])){
                $title = $_POST['title'];
                $description = $_POST['description'];
                $postcode = $_POST['postcode'];
                $name = $_POST['name'];
                $subcategory = lcfirst($_POST['subcategory']);
            }


            $subCategoryListMenu = array();
            $subCategoryListMenu = CategoryMobile::getSubcategyListByCategory($categoryChecker);
            require_once(ROOT . '/views/post/add-mobile.php');
            return true;
        }


    }

    public
    function actionCategoryList()
    {

        require_once(ROOT . '/views/post/firststep.php');
        return true;

    }

}