<?php

class Post
{

    public static function saveEscortsAndMassages($user_id, $tableName, $title, $adtype, $description, $gender, $ethnicity,
                                                  $itemAgeValue, $postcode, $name, $email,
                                                  $phone, $paymentMethod, $language, $interests, $servfor, $col1incallrow1, $col2outcallrow1, $col1incallrow2,
                                                  $col2outcallrow2, $col1incallrow3, $col2outcallrow3, $col1incallrow4, $col2outcallrow4,
                                                  $col1incallrow5, $col2outcallrow5, $col1incallrow6, $col2outcallrow6)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'INSERT INTO ' . $tableName . '(`user_id`, `title`, `adtype`, `description`, `gender`, `ethnicity`, 
        `itemAgeValue`, `postcode`, `name`, `email`, `phone`, `paymentMethod`, `language`, `interests`, `servfor`, `col1incallrow1`,
         `col2outcallrow1`, `col1incallrow2`, `col2outcallrow2`, `col1incallrow3`, `col2outcallrow3`, `col1incallrow4`, 
         `col2outcallrow4`, `col1incallrow5`, `col2outcallrow5`, `col1incallrow6`, `col2outcallrow6`) 
        
         VALUES (:user_id, :title,:adtype,:description, :gender,:ethnicity,:itemAgeValue,:postcode, :name,:email,
         :phone,:paymentMethod,:language,:interests,:servfor,:col1incallrow1,:col2outcallrow1,:col1incallrow2,:col2outcallrow2,
         :col1incallrow3,:col2outcallrow3,:col1incallrow4,:col2outcallrow4,:col1incallrow5,:col2outcallrow5,:col1incallrow6,:col2outcallrow6)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':adtype', $adtype, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':ethnicity', $ethnicity, PDO::PARAM_STR);
        $result->bindParam(':itemAgeValue', $itemAgeValue, PDO::PARAM_STR);
        $result->bindParam(':postcode', $postcode, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':paymentMethod', $paymentMethod, PDO::PARAM_STR);
        $result->bindParam(':language', $language, PDO::PARAM_STR);
        $result->bindParam(':interests', $interests, PDO::PARAM_STR);
        $result->bindParam(':servfor', $servfor, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow1', $col1incallrow1, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow1', $col2outcallrow1, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow2', $col1incallrow2, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow2', $col2outcallrow2, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow3', $col1incallrow3, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow3', $col2outcallrow3, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow4', $col1incallrow4, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow4', $col2outcallrow4, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow5', $col1incallrow5, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow5', $col2outcallrow5, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow6', $col1incallrow6, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow6', $col2outcallrow6, PDO::PARAM_STR);
        $result->execute();
        $id = $db->lastInsertId();
        return $id;
    }

    public static function saveAdultGayEscorts($user_id, $tableName, $title, $description, $gender, $ethnicity,
                                                  $itemAgeValue, $postcode, $name, $email,
                                                  $phone, $paymentMethod, $language, $interests, $servfor, $position, $col1incallrow1, $col2outcallrow1, $col1incallrow2,
                                                  $col2outcallrow2, $col1incallrow3, $col2outcallrow3, $col1incallrow4, $col2outcallrow4,
                                                  $col1incallrow5, $col2outcallrow5, $col1incallrow6, $col2outcallrow6)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'INSERT INTO ' . $tableName . '(`user_id`, `title`, `description`, `gender`, `ethnicity`, 
        `itemAgeValue`, `postcode`, `name`, `email`, `phone`, `paymentMethod`, `language`, `interests`, `servfor`, `position`, `col1incallrow1`,
         `col2outcallrow1`, `col1incallrow2`, `col2outcallrow2`, `col1incallrow3`, `col2outcallrow3`, `col1incallrow4`, 
         `col2outcallrow4`, `col1incallrow5`, `col2outcallrow5`, `col1incallrow6`, `col2outcallrow6`) 
        
         VALUES (:user_id, :title,:description, :gender,:ethnicity,:itemAgeValue,:postcode, :name,:email,
         :phone,:paymentMethod,:language,:interests,:servfor, :position, :col1incallrow1,:col2outcallrow1,:col1incallrow2,:col2outcallrow2,
         :col1incallrow3,:col2outcallrow3,:col1incallrow4,:col2outcallrow4,:col1incallrow5,:col2outcallrow5,:col1incallrow6,:col2outcallrow6)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':ethnicity', $ethnicity, PDO::PARAM_STR);
        $result->bindParam(':itemAgeValue', $itemAgeValue, PDO::PARAM_STR);
        $result->bindParam(':postcode', $postcode, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':paymentMethod', $paymentMethod, PDO::PARAM_STR);
        $result->bindParam(':language', $language, PDO::PARAM_STR);
        $result->bindParam(':interests', $interests, PDO::PARAM_STR);
        $result->bindParam(':servfor', $servfor, PDO::PARAM_STR);
        $result->bindParam(':position', $position, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow1', $col1incallrow1, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow1', $col2outcallrow1, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow2', $col1incallrow2, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow2', $col2outcallrow2, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow3', $col1incallrow3, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow3', $col2outcallrow3, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow4', $col1incallrow4, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow4', $col2outcallrow4, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow5', $col1incallrow5, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow5', $col2outcallrow5, PDO::PARAM_STR);
        $result->bindParam(':col1incallrow6', $col1incallrow6, PDO::PARAM_STR);
        $result->bindParam(':col2outcallrow6', $col2outcallrow6, PDO::PARAM_STR);
        $result->execute();
        $id = $db->lastInsertId();
        return $id;
    }

    public static function saveFriendshipFriends($user_id, $tableName, $title, $description, $gender,
                                                 $itemAgeValue, $postcode, $name, $email,
                                                 $phone, $paymentMethod)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'INSERT INTO ' . $tableName . '(`user_id`, `title`, `description`, `gender`, 
        `itemAgeValue`, `postcode`, `name`, `email`, `phone`, `paymentMethod`) 
        
         VALUES (:user_id, :title,:description, :gender,:itemAgeValue,:postcode, :name,:email,
         :phone,:paymentMethod)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':itemAgeValue', $itemAgeValue, PDO::PARAM_STR);
        $result->bindParam(':postcode', $postcode, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':paymentMethod', $paymentMethod, PDO::PARAM_STR);
        $result->execute();
        $id = $db->lastInsertId();
        return $id;
    }

    public static function saveStraightRelationships($user_id, $tableName, $title, $seekingtype, $description,
                                                     $itemAgeValue, $postcode, $name, $email,
                                                     $phone, $paymentMethod)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'INSERT INTO ' . $tableName . '(`user_id`, `title`, `seekingtype`, `description`, 
        `itemAgeValue`, `postcode`, `name`, `email`, `phone`, `paymentMethod`) 
        
         VALUES (:user_id, :title,:seekingtype, :description,:itemAgeValue,:postcode, :name,:email,
         :phone,:paymentMethod)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':seekingtype', $seekingtype, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':itemAgeValue', $itemAgeValue, PDO::PARAM_STR);
        $result->bindParam(':postcode', $postcode, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':paymentMethod', $paymentMethod, PDO::PARAM_STR);
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