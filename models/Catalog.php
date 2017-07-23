<?php

class Catalog
{
    public static function incrementCountFromCategory($subcategory = false)
    {
        if ($subcategory) {
            $db = Db::getConnection();
            $sql = 'UPDATE `category-count` SET `count` = `count` + 1 WHERE `sub-category`= :sub-category';
            $result = $db->prepare($sql);
            $result->bindParam(':sub-category', $subcategory, PDO::PARAM_STR);
            return $result->execute();
        }
    }
}