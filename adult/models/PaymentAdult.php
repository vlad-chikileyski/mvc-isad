<?php

class PaymentAdult
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

    public static function getAllPayments()
    {
        $db = Db::getConnection();
        $payments = array();
        $result = $db->query('SELECT `id`,`payment_title_name`, `url`, `price` FROM ADMIN_PAYMENT_METHOD WHERE `active_flag`= 1');
        $i = 0;
        while ($row = $result->fetch()) {
            $payments[$i]['id'] = $row['id'];
            $payments[$i]['price'] = $row['price'];
            $payments[$i]['url'] = $row['url'];
            $payments[$i]['payment_title_name'] = $row['payment_title_name'];
            $i++;
        }
        return $payments;
    }
}