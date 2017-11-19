<?php

class Catalog
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

    public static function postAddAction($userId, $adsId, $table, $category_name)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO `dashboard_user_ads`(`userId`, `adsId`, `subcategory_name`, `category_name`) 
            VALUES (:userId,:adsId,:subcategory_name,:category_name)';
        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userId, PDO::PARAM_STR);
        $result->bindParam(':adsId', $adsId, PDO::PARAM_STR);
        $result->bindParam(':subcategory_name', $table, PDO::PARAM_STR);
        $result->bindParam(':category_name', $category_name, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function postAddInsertTokenDashboard($authKey, $authToken, $userId, $adsId, $tableName)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO `USER_ACTIVATE_ADS`(`USER_AUTH_ID`, `USER_AUTH_TOKEN`, `USER_ID`, `USER_ADS_ID`, `TABLE_NAME`) 
        VALUES (:authKey,:authToken,:userId,:adsId,:tableName)';
        $result = $db->prepare($sql);
        $result->bindParam(':authKey', $authKey, PDO::PARAM_STR);
        $result->bindParam(':authToken', $authToken, PDO::PARAM_STR);
        $result->bindParam(':userId', $userId, PDO::PARAM_STR);
        $result->bindParam(':adsId', $adsId, PDO::PARAM_STR);
        $result->bindParam(':tableName', $tableName, PDO::PARAM_STR);
        return $result->execute();
    }
}