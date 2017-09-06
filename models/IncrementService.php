<?php

class IncrementService
{

    public static function incrementCountValue($subcategory)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'UPDATE `category-count` SET `count-val` = `count-val` + 1 WHERE `sub-category` = :subcategory ';
        $result = $db->prepare($sql);
        $result->bindParam(':subcategory', $subcategory, PDO::PARAM_STR);
        return $result->execute();
    }

}
?>