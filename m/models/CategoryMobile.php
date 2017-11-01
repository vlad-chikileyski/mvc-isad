<?php

class CategoryMobile
{
    /**
     * Get sub-category list ?
     * @return array
     */
    public static function getSubcategyListByCategory($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnectionOnCatics();
            $subcategory = array();
            $result = $db->query('SELECT * FROM catalog_subcategory WHERE category = "'.$categoryName.'" ');
            $i = 0;
            while ($row = $result->fetch()) {
                $subcategory[$i]['category'] = $row['category'];
                $subcategory[$i]['sub_category_title'] = $row['sub_category_title'];
                $i++;
            }
            return $subcategory;
        }
    }
}

