<?php

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 12.07.17
 * Time: 23:30
 */
class User
{

    /**
     * GetAllUserForAdminPanel
     * @return mixed
     */
    public static function getAllUser()
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM user';
        $result = $db->prepare($sql);
        $result->execute();

        return $result->fetch();
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
        if ($result->fetchColumn())
            return true;
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