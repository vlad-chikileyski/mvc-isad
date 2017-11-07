<?php

class CategoryController
{

    public function actionIndex($subcategory)
    {
        $categoryExistParamName = CategoryFilterMobile::categoryCheckParam($subcategory);
        if ($categoryExistParamName == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $subCategoryListElements = array();
            $subCategoryListElements = CategoryMobile::getSubcategyListByCategory($categoryExistParamName);
            require_once(ROOT . '/views/subcategory/subcategory.php');
            return true;

        }
    }
}