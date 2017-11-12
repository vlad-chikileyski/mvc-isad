<?php

class CategoryMain
{

    public static function getSubcategyListByCategoryFilter($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnectionOnCatics();
            $subcategory = array();
            $result = $db->query('SELECT * FROM `catalog_subcategory` WHERE category = "' . $categoryName . '" '
                . 'ORDER BY sort');
            $i = 0;
            while ($row = $result->fetch()) {
                $subcategory[$i]['sub_category_title'] = $row['sub_category_title'];
                $subcategory[$i]['category'] = $row['category'];
                $subcategory[$i]['subcategory_name'] = $row['subcategory_name'];
                $i++;
            }
            return $subcategory;
        }
    }

    /**
     * Get sub-category list ?
     * @return array
     */
    public static function getSubcategyListByCategory($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnectionOnCatics();
            $subcategory = array();
            $result = $db->query('SELECT * FROM `category-menu` WHERE category = "' . $categoryName . '" '
                . 'AND status = 1 ORDER BY position');
            $i = 0;
            while ($row = $result->fetch()) {
                $subcategory[$i]['menu-title'] = $row['menu-title'];
                $subcategory[$i]['url-title'] = $row['url-title'];
                $subcategory[$i]['category'] = $row['category'];
                $subcategory[$i]['subcategory-name'] = $row['subcategory-name'];
                $i++;
            }
            return $subcategory;
        }
    }


    /**
     * Check - category exists ?
     * @return bool
     */
    public static function categoryCheck($urlParam)
    {
        switch ($urlParam) {
            case 'electronics':
                return 'electronics';
                break;
            case 'mobiles':
                return 'mobiles';
                break;
            case 'furniture':
                return 'furniture';
                break;
            case 'services':
                return 'services';
                break;
            case 'education':
                return 'education';
                break;
            case 'animals':
                return 'animals';
                break;
            case 'fashion':
                return 'fashion';
                break;
            case 'baby-products':
                return 'baby-products';
                break;
        }
        return false;
    }
}