<?php

class Payment
{
    public static function updatePaymentInfo($userid, $adsid, $id_token, $token, $tableName, $paymentType)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO user_payment (user_id,ads_id,id_token,key_token, table_name, payment_type)'
            . 'VALUES (:user_id,:ads_id,:id_token,:key_token, :table_name, :payment_type)';
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $userid, PDO::PARAM_STR);
        $result->bindParam(':ads_id', $adsid, PDO::PARAM_STR);
        $result->bindParam(':id_token', $id_token, PDO::PARAM_STR);
        $result->bindParam(':key_token', $token, PDO::PARAM_STR);
        $result->bindParam(':table_name', $tableName, PDO::PARAM_STR);
        $result->bindParam(':payment_type', $paymentType, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function checkPaymentInfo($id_token, $token)
    {
        $db = Db::getConnection();
        $sql = 'SELECT COUNT(*) FROM user_payment WHERE id_token = :id_token AND key_token = :key_token';
        $result = $db->prepare($sql);
        $result->bindParam(':id_token', $id_token, PDO::PARAM_STR);
        $result->bindParam(':key_token', $token, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn())
            return true;
        return false;
    }

    public static function getUserAdsIdByTokenAndTokenId($id_token, $token)
    {
        if (isset($id_token, $token)) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user_payment WHERE id_token = :id_token AND key_token = :key_token';

            $result = $db->prepare($sql);
            $result->bindParam(':id_token', $id_token, PDO::PARAM_STR);
            $result->bindParam(':key_token', $token, PDO::PARAM_STR);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function getPaymentInfoByTokenAndTokenId($payment_type)
    {
        $db = Db::getConnection();
        $product = array();
        $result = $db->query('SELECT * FROM `ADMIN_PAYMENT_METHOD` WHERE id='.$payment_type.' AND active_flag=1');
        $i = 0;
        while ($row = $result->fetch()) {
            $product[$i]['price'] = $row['price'];
            $product[$i]['payment_title_name'] = $row['payment_title_name'];
            $product[$i]['price_value_text'] = $row['price_value_text'];
           $i++;
        }
        return $product;

    }
    public static function getAllPayments()
    {
        $db = Db::getConnection();
        $payments = array();
        $result = $db->query('SELECT `id`,`payment_title_name`, `url`, `price`, `price_value_text` FROM ADMIN_PAYMENT_METHOD WHERE `active_flag`= 1');
        $i = 0;
        while ($row = $result->fetch()) {
            $payments[$i]['id'] = $row['id'];
            $payments[$i]['price'] = $row['price'];
            $payments[$i]['url'] = $row['url'];
            $payments[$i]['payment_title_name'] = $row['payment_title_name'];
            $payments[$i]['price_value_text'] = $row['price_value_text'];
            $i++;
        }
        return $payments;
    }
}