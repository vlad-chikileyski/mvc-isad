<?php

class Product
{
    const SHOW_BY_DEFAULT = 10;

    public static function getProductsListByCategory($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnection();
            $products = array();
            $result = $db->query('SELECT * FROM product WHERE status = 1 AND category_name = "' . $categoryName . '" ORDER BY id DESC LIMIT 10');
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }
            return $products;
        }
    }

    /**
     * @returns product item by id
     * @param integer $id
     */
    public static function getProductById($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->fetch();
        }
    }
}
