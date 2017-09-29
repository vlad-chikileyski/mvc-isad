<?php

class Payment
{
    public static function updatePaymentInfo($userId, $adsId, $token, $id_token)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO user_payment (user_id,ads_Id,key_token,id_token)'
            . 'VALUES (:user_id,:ads_Id,:key_token,:id_token)';
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':ads_id', $adsId, PDO::PARAM_STR);
        $result->bindParam(':key_token', $token, PDO::PARAM_STR);
        $result->bindParam(':id_token', $id_token, PDO::PARAM_STR);
        return $result->execute();
    }
}