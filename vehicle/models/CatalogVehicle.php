<?php

class CatalogVehicle
{
    public static function incrementCountFromCategory($subcategory = false)
    {
        if ($subcategory) {
            $db = Db::getConnectionOnCatics();
            $sql = 'UPDATE `category-count` SET `count-val` = `count-val` + 1 WHERE `sub-category`= :subcategory';
            $result = $db->prepare($sql);
            $result->bindParam(':subcategory', $subcategory, PDO::PARAM_STR);
            return $result->execute();
        }
    }
}