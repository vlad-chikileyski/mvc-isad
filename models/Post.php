<?php

class Post
{

    public static function save($tableName, $title, $description, $userId, $postcode, $name, $veryfyEmail, $phone, $subcategory)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'INSERT INTO ' . $tableName . ' (title, description, user_id)'
            . 'VALUES (:title, :description, :user_id)';
        $result = $db->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':postcode', $postcode, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':veryfyEmail', $veryfyEmail, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':subcategory', $subcategory, PDO::PARAM_STR);
        return $result->execute();
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

    public static function checkEqualUserEmailAndPostData($notVerifyEmail, $userImail)
    {

        if (strtolower($notVerifyEmail)==strtolower($userImail)) {
            return true;
        }
        return false;
    }

}