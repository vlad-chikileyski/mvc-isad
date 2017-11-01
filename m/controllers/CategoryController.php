<?php

class CategoryController
{

    public function actionIndex($subcategory)
    {
        $subCategoryListElements = array();
        $subCategoryListElements = CategoryMobile::getSubcategyListByCategory($subcategory);
        require_once(ROOT . '/views/subcategory/subcategory.php');
        return true;

    }
}