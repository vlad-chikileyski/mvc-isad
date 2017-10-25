<?php

class PaymentsActivePanel
{
    public static function getAllPayments()
    {
        $db = Db::getConnection();
        $payments = array();
        $result = $db->query('SELECT * FROM ADMIN_PAYMENT_METHOD');
        $i = 0;
        while ($row = $result->fetch()) {
            $payments[$i]['id'] = $row['id'];
            $payments[$i]['active_flag'] = $row['active_flag'];
            $payments[$i]['price'] = $row['price'];
            $payments[$i]['url'] = $row['url'];
            $payments[$i]['payment_title_name'] = $row['payment_title_name'];
            $i++;
        }
        return $payments;
    }

    public static function getPaymentsByPId($paymentsId)
    {
        $db = Db::getConnection();
        $payments = array();
        $result = $db->query('SELECT * FROM ADMIN_PAYMENT_METHOD WHERE id=' . $paymentsId);
        $i = 0;
        while ($row = $result->fetch()) {
            $payments[$i]['id'] = $row['id'];
            $payments[$i]['active_flag'] = $row['active_flag'];
            $payments[$i]['price'] = $row['price'];
            $payments[$i]['url'] = $row['url'];
            $payments[$i]['payment_title_name'] = $row['payment_title_name'];
            $i++;
        }
        return $payments;
    }

    public static function saveNewPayments($title, $price, $url, $active)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO `ADMIN_PAYMENT_METHOD`(`payment_title_name`, `price`, `url`, `active_flag`) 
          VALUES (:title, :price, :url, :active_flag)';
        $result = $db->prepare($sql);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':price', $price, PDO::PARAM_STR);
        $result->bindParam(':url', $url, PDO::PARAM_STR);
        $result->bindParam(':active_flag', $active, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function updatePayments($paymentsId, $title, $price, $url, $active)
    {
        $db = Db::getConnection();
        $sql = 'UPDATE `ADMIN_PAYMENT_METHOD` SET `payment_title_name` =:title, price =:price, url=:url, active_flag =:active_flag WHERE `id`= :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $paymentsId, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':price', $price, PDO::PARAM_STR);
        $result->bindParam(':url', $url, PDO::PARAM_STR);
        $result->bindParam(':active_flag', $active, PDO::PARAM_STR);
        return $result->execute();
    }
}