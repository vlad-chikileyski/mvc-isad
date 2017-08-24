<?php
class Product
{
    const SHOW_BY_DEFAULT = 30;
    public static function getProductsListByCategory($categoryExistName = false, $page = 1)
    {
        if ($categoryExistName) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            $db = Db::getConnectionOnCatics();
            $products = array();
            $result = $db->query('SELECT * FROM electrTabletsNics UNION ALL SELECT * FROM electrPhonesNics UNION ALL SELECT * FROM electrDvdBluRayNics UNION ALL SELECT * FROM electrAccessoriesNics UNION ALL SELECT * FROM electrTvNics UNION ALL SELECT * FROM electrPhotoNics UNION ALL SELECT * FROM electrComputersNics UNION ALL SELECT * FROM electrGamesAndConsolesNics UNION ALL SELECT * FROM electrMp3AndAudioNics ORDER BY id DESC LIMIT 30 OFFSET ' . $offset);
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['sub-category'] = $row['sub-category'];
                $products[$i]['category'] = $categoryExistName;
                $products[$i]['date'] = $row['date'];
                $i++;
            }
            return $products;
        }
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
                $product[$i]['date'] = $row['date'];
                $product[$i]['user_id'] = $row['user_id'];
                $i++;
            }
            return $product;
        }
    }
    /**
     * Returns total products
     */
    public static function getTotalProductsInCategory($subCategoryName)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'SELECT `count-val` FROM `category-count`'
            . 'WHERE `sub-category`=:subCategory';
        $result = $db->prepare($sql);
        $result->bindParam(':subCategory', $subCategoryName, PDO::PARAM_STR);
        $result->execute();
        $row = $result->fetch();
        return $row['count-val'];
    }
    /**
     * Returns total products
     */
    public static function getTotalProductsInAllCategory($categoryName)
    {
        $db = Db::getConnectionOnCatics();
        $sql = 'SELECT  SUM(`count-val`) FROM `category-count`'
            . 'WHERE `category`= :category';
        $result = $db->prepare($sql);
        $result->bindParam(':category', $categoryName, PDO::PARAM_STR);
        $result->execute();
        $row = $result->fetch();
        $page = intval($row[0]);
        return $page;
    }
    /**
     * @param $urlParam
     * @param bool $categoryExistDoubleParamName
     * @param int $page
     * @return array
     */
    public static function getProductListByCategory($urlParam, $categoryExistDoubleParamName = false, $page = 1)
    {
        if ($categoryExistDoubleParamName) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            $db = Db::getConnectionOnCatics();
            $products = array();
            $result = $db->query('SELECT * FROM ' . $categoryExistDoubleParamName . ' WHERE status = 1 ORDER BY id DESC LIMIT 30 OFFSET ' . $offset);
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['sub-category'] = $row['sub-category'];
                $products[$i]['category'] = $urlParam;
                $products[$i]['date'] = $row['date'];
                $i++;
            }
            return $products;
        }
    }
}