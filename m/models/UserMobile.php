<?php

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 12.07.17
 * Time: 23:30
 */
class UserMobile
{

    public static function userChange($userId, $name, $email, $phone, $select_box_gender_var, $check_box_newsletter_var)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE `user` SET  `username` = :username, `email` = :email, `phone` = :phone, `gender` = :gender ,`newsletter` = :newsletter WHERE `id` = :userId';
        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userId, PDO::PARAM_STR);
        $result->bindParam(':username', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':gender', $select_box_gender_var, PDO::PARAM_INT);
        $result->bindParam(':newsletter', $check_box_newsletter_var, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function userChangePassword($userId, $password)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE `user` SET  `password` = :password  WHERE `id` = :userId';
        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userId, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function userChangeAdsInfo($getTableBySubcatName, $title, $description, $userId, $adsId)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'UPDATE  `' . $getTableBySubcatName . '` SET  `title`=:title, `description`=:description WHERE `user_id`=:user_id  AND `id`=:adsId';
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $result->bindParam(':adsId', $adsId, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function userChangeToken($userId, $token_password)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE `user` SET  `reset_password` = :token  WHERE `id` = :userId';
        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userId, PDO::PARAM_INT);
        $result->bindParam(':token', $token_password, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function userDeleteKey($userId)
    {
        $db = Db::getConnection();
        $sql = 'DELETE FROM `USER_CHANGE_PASSWORD` WHERE `user_id`=:user_id';
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function register($username, $email, $password)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO user (username, email, password)'
            . 'VALUES (:username, :email, :password)';
        $result = $db->prepare($sql);
        $result->bindParam(':username', $username, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function generateToken($userId, $ID_TOKEN, $KEY_TOKEN)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO USER_CHANGE_PASSWORD (`user_id` , `key-token` , `id-token`)'
            . 'VALUES (:user_id, :key_token, :id_token)';
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':key_token', $ID_TOKEN, PDO::PARAM_STR);
        $result->bindParam(':id_token', $KEY_TOKEN, PDO::PARAM_STR);
        return $result->execute();
    }


    /**
     * generate new password;
     */
    public static function generatePassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 15; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    /**
     * validate: username > 5?
     *
     */
    public static function checkName($username)
    {
        if (strlen($username) >= 5) {
            return true;
        }
        return false;
    }

    /**
     * validate: password >= 6?
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
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

    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }

    public static function checkToken($key, $token)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM USER_CHANGE_PASSWORD WHERE `key-token` = :key AND `id-token` =:token';
        $result = $db->prepare($sql);
        $result->bindParam(':key', $key, PDO::PARAM_STR);
        $result->bindParam(':token', $token, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }

    public static function getUserIdByToken($key, $token)
    {
        $db = Db::getConnection();
        $sql = 'SELECT user_id FROM USER_CHANGE_PASSWORD WHERE `key-token` = :key AND `id-token` =:token';
        $result = $db->prepare($sql);
        $result->bindParam(':key', $key, PDO::PARAM_STR);
        $result->bindParam(':token', $token, PDO::PARAM_STR);
        $result->execute();
        $user = $result->fetch();
        if ($user) {
            return $user['user_id'];
        }
        return false;
    }

    /**
     * Check - user exists ? in db
     * @param string $username string $password
     * @param string $password
     * @return bool
     */
    public static function checkUserData($username, $password)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE username = :username AND password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':username', $username, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
    }

    /**
     * Save user
     * @param string userId
     */

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    /**
     * Check users logged?
     */
    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location: /");
    }

    public static function checkId()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
    }

    /**
     * Check users guest?
     */
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    /**
     * Returns user by ID
     * @param integer $id
     */
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE id=:id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function getUserByEmail($email)
    {
        if ($email) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE email=:email';

            $result = $db->prepare($sql);
            $result->bindParam(':email', $email, PDO::PARAM_INT);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function getUserListAdsById($id)
    {
        if ($id) {
            $db = Db::getConnectionOnCatics();
            $sql = 'SELECT * FROM user WHERE id=:id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

}