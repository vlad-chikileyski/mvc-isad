<?php

class ProductMobile
{
    const SHOW_BY_DEFAULT = 30;

    public static function getProductsListByCategory($categoryExistName = false, $page = 1)
    {
        if ($categoryExistName) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            $db = Db::getConnectionOnCatics();
            $products = array();
            /*SELECT * FROM electrTabletsNics UNION ALL*/
            $result = $db->query(' SELECT * FROM electrAccessoriesNics ORDER BY id DESC LIMIT 30 OFFSET ' . $offset);
            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['description'] = $row['description'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['subcategory'] = $row['subcategory'];
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
                $product[$i]['postcode'] = $row['postcode'];
                $product[$i]['date'] = $row['date'];
                $i++;
            }
            return $product;
        }
    }

    /**
     * Returns total products
     */
        public static function getSimilarAdsByCategoryAndSubcategory($getTableNameProduct,$categoryParam,$subcategoryParam){
        $db = Db::getConnectionOnCatics();
        $product = array();
        $result = $db->query('SELECT * FROM `' .$getTableNameProduct. '` ORDER BY id DESC LIMIT 5' );
        $i = 0;
        while ($row = $result->fetch()) {
            $product[$i]['id'] = $row['id'];
            $product[$i]['image-0'] = $row['image-0'];
            $product[$i]['image-1'] = $row['image-1'];
            $product[$i]['image-2'] = $row['image-2'];
            $product[$i]['image-3'] = $row['image-3'];
            $product[$i]['image-4'] = $row['image-4'];
            $product[$i]['title'] = $row['title'];
            $product[$i]['price'] = $row['price'];
            $product[$i]['category'] = $categoryParam;
            $product[$i]['subcategory'] = $subcategoryParam;
            $product[$i]['description'] = $row['description'];
            $i++;
        }
        return $product;
    }

    public static function getAdsByCategoryAndSubcategory($getTableNameProduct, $categoryParam, $subcategoryParam,$productId)
    {
        $db = Db::getConnectionOnCatics();
        $product = array();
        $result = $db->query('SELECT * FROM `' .$getTableNameProduct. '`WHERE id='.$productId);
        $i = 0;
        while ($row = $result->fetch()) {
            $product[$i]['id'] = $row['id'];
            $product[$i]['image-0'] = $row['image-0'];
            $product[$i]['image-1'] = $row['image-1'];
            $product[$i]['image-2'] = $row['image-2'];
            $product[$i]['image-3'] = $row['image-3'];
            $product[$i]['image-4'] = $row['image-4'];
            $product[$i]['title'] = $row['title'];
            $product[$i]['date'] = $row['date'];
            $product[$i]['price'] = $row['price'];
            $product[$i]['category'] = $categoryParam;
            $product[$i]['subcategory'] = $subcategoryParam;
            $product[$i]['description'] = $row['description'];
            $i++;
        }
        return $product;
    }
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

    public static function getAdsIdByUserId($userId)
    {
        $db = Db::getConnection();
        $ads = array();
        $result = $db->query('SELECT * FROM dashboard_user_ads WHERE userId=' . $userId);
        $i = 0;
        while ($row = $result->fetch()) {
            $ads[$i]['adsId'] = $row['adsId'];
            $ads[$i]['category_name'] = $row['category_name'];
            $ads[$i]['subcategory_name'] = $row['subcategory_name'];
            $i++;
        }
        return $ads;
    }

    /*
     *
     * return FavAds by userId
     */
    public static function getFavAdsByCreatedUserId($userId)
    {
        $db = Db::getConnection();
        $favAds = array();
        $result = $db->query('SELECT * FROM dashboard_favorite_ads WHERE user_id=' . $userId);
        $i = 0;
        while ($row = $result->fetch()) {
            $favAds[$i]['ads_id'] = $row['ads_id'];
            $favAds[$i]['subcategory_name'] = $row['subcategory_name'];
            $favAds[$i]['category_name'] = $row['category_name'];
            $i++;
        }
        return $favAds;
    }

    public static function getProductListByTableNameAndAdsId($table_name, $adsId, $category)
    {
        $db = Db::getConnectionOnCatics();
        $products = array();
        $result = $db->query('SELECT * FROM ' . $table_name . ' WHERE id = ' . $adsId);
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['title'] = $row['title'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['subcategory'] = $row['subcategory'];
            $products[$i]['category'] = $category;
            $products[$i]['date'] = $row['date'];
            $i++;
        }
        return $products;
    }

    public static function getFavAdsListByTableNameAndAdsId($table_name, $adsId, $category)
    {
        $db = Db::getConnectionOnCatics();
        $favAds = array();
        $result = $db->query('SELECT * FROM ' . $table_name . ' WHERE id = ' . $adsId);
        $i = 0;
        while ($row = $result->fetch()) {
            $favAds[$i]['id'] = $row['id'];
            $favAds[$i]['title'] = $row['title'];
            $favAds[$i]['description'] = $row['description'];
            $favAds[$i]['price'] = $row['price'];
            $favAds[$i]['subcategory'] = $row['subcategory'];
            $favAds[$i]['category'] = $category;
            $favAds[$i]['date'] = $row['date'];
            $i++;
        }
        return $favAds;
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
                $products[$i]['subcategory'] = $row['subcategory'];
                $products[$i]['category'] = $urlParam;
                $products[$i]['date'] = $row['date'];
                $i++;
            }
            return $products;
        }
    }
}