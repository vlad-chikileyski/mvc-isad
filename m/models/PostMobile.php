<?php

class PostMobile
{

    public static function save($tableName, $title, $description, $userId, $postcode, $subcategory, $status, $price)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'INSERT INTO ' . $tableName . ' (title, description, user_id, postcode, status, subcategory, price)'
            . 'VALUES (:title, :description, :user_id, :postcode, :status, :subcategory, :price)';
        $result = $db->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':postcode', $postcode, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_STR);
        $result->bindParam(':subcategory', $subcategory, PDO::PARAM_STR);
        $result->bindParam(':price', $price, PDO::PARAM_STR);
        $result->execute();
        $id = $db->lastInsertId();
        return $id;
    }

    /**
     * validate: email?
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

}