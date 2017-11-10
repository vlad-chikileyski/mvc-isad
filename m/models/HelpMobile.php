<?php

class HelpMobile
{

    public static function contact($username, $useremail, $userphone, $usercity, $usermassage)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO user_contact (username , useremail , userphone , usercity , usermassage)'
            . 'VALUES (:username, :useremail, :userphone,:usercity,:usermassage)';
        $result = $db->prepare($sql);
        $result->bindParam(':username', $username, PDO::PARAM_STR);
        $result->bindParam(':useremail', $useremail, PDO::PARAM_STR);
        $result->bindParam(':userphone', $userphone, PDO::PARAM_STR);
        $result->bindParam(':usercity', $usercity, PDO::PARAM_STR);
        $result->bindParam(':usermassage', $usermassage, PDO::PARAM_STR);
        return $result->execute();
    }

}