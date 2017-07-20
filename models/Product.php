<?php

class Product
{
    const SHOW_BY_DEFAULT = 30;

    public static function getProductsListByCategory($tableCategoryName = false, $page = 1, $categoryParam, $subCategoryParam)
    {
        $db = Db::getConnectionOnCatics();

        $sql = 'SELECT 
          *
        FROM 
          `electronicsTablets` AS `cnt`                 
        INNER JOIN 
          `electrPhonesNics` AS `cit`';

        $stmt = $db->query($sql);
        $res = $stmt->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);

        echo '<pre>';
        print_r( $res );
        echo '</pre>';
        /*if ($tableCategoryName) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            $db = Db::getConnectionOnCatics();
            $products = array();
            $result = $db->query('SELECT * FROM ' . $tableCategoryName . ' WHERE status = 1 ORDER BY id DESC LIMIT 30 OFFSET ' . $offset);
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['category'] = $categoryParam;
                $products[$i]['subcategory'] = $subCategoryParam;
                $i++;
            }
            return $products;
        }*/
    }

    /**
     * @returns product item by id
     * @param integer $id
     */
    public static function getProductById($tableNameProduct, $productId, $categoryParam, $subCategoryParam)
    {
        $productId = intval($productId);
        if ($productId) {
            $db = Db::getConnectionOnCatics();
            $product = array();
            $result = $db->query('SELECT * FROM ' . $tableNameProduct . ' WHERE id=' . $productId);
            $i = 0;
            while ($row = $result->fetch()) {
                $product[$i]['id'] = $row['id'];
                $product[$i]['title'] = $row['title'];
                $product[$i]['description'] = $row['description'];
                $product[$i]['price'] = $row['price'];
                $product[$i]['category'] = $categoryParam;
                $product[$i]['subcategory'] = $subCategoryParam;
                $i++;
            }
            return $product;
        }
    }

    /**
     * Returns total products
     */
    public static function getTotalProductsInCategory($categoryName)
    {
        $db = Db::getConnectionOnCatics();

        $result = $db->query('SELECT count(id) AS count FROM ' . $categoryName . ' '
            . 'WHERE status="1"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row['count'];
    }
}
