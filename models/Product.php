<?php

class Product
{
    const SHOW_BY_DEFAULT = 30;

    public static function getProductsListByCategory($categoryName = false, $page = 1)
    {
        if ($categoryName) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            $db = Db::getConnection();
            $products = array();
            $result = $db->query('SELECT * FROM product WHERE status = 1 AND category_name = "' . $categoryName . '" ORDER BY id DESC LIMIT 30 OFFSET '. $offset);
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
    /**
     * Returns total products
     */
    public static function getTotalProductsInCategory($categoryName)
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="1" AND category_name ="'.$categoryName.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
}
