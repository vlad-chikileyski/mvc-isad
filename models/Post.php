<?php

class Post
{

    public static function save($tableName, $title, $descriptionm, $userId)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'INSERT INTO ' . $tableName . ' (title, description, user_id)'
            . 'VALUES (:title, :description, :user_id)';
        $result = $db->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $descriptionm, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
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