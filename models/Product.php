<?php

class Product
{
    const  SHOW_BY_DEFAULT = 10;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT `id`, `category_id`, `title`, `price`, `img`, `status` FROM `q-property`'
        .' WHERE `status` = "1"'
        .' ORDER BY id DESC LIMIT 2');
        //echo $count;
        $i = 0;
        while ($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['img'] = $row['img'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }
}
