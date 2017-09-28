<?php

class Category
{
    /**
     * Get sub-category list ?
     * @return array
     */
    public static function getSubcategyListByCategory($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnectionOnCatics();
            $subcategory = array();
            $result = $db->query('SELECT * FROM `category-menu` WHERE category = "' . $categoryName . '" '
                . 'AND status = 1 ORDER BY position');
            $i = 0;
            while ($row = $result->fetch()) {
                $subcategory[$i]['menu-title'] = $row['menu-title'];
                $subcategory[$i]['url-title'] = $row['url-title'];
                $subcategory[$i]['category'] = $row['category'];
                $i++;
            }
            return $subcategory;
        }
    }


    /**
     * Check - category exists ?
     * @return bool
     */
    public static function categoryCheck($urlParam)
    {
        switch ($urlParam) {
            case 'adult-dating':
                return 'adult-dating';
                break;
            case 'swingers':
                return 'swingers';
                break;
            case 'escorts-and-massages':
                return 'escorts-and-massages';
                break;
            case 'gay-escorts':
                return 'gay-escorts';
                break;
            case 'adult-entertainment':
                return 'adult-entertainment';
                break;
            case 'adult-jobs':
                return 'adult-jobs';
                break;
            case 'gay-and-lesbian':
                return 'gay-and-lesbian';
                break;
            case 'friendship-friends':
                return 'friendship-friends';
                break;
            case 'straight-relationships':
                return 'straight-relationships';
                break;
        }
        return false;
    }

    /**
     * Check - category exists ?
     * @return bool
     */
    public static function categoryGetTableName($subcategory)
    {
        switch ($subcategory) {
            case 'adult-dating':
                return 'adultAdultDating';
                break;
            case 'swingers':
                return 'adultSwingers';
                break;
            case 'escorts-and-massages':
                return 'adultEscortsAndMassages';
                break;
            case 'gay-escorts':
                return 'adultGayEscorts';
                break;
            case 'adult-entertainment':
                return 'adultAdultEntertainment';
                break;
            case 'adult-jobs':
                return 'adultAdultJobs';
                break;
            case 'gay-and-lesbian':
                return 'adultGayAndLesbian';
                break;
            case 'friendship-friends':
                return 'adultFriendshipFriends';
                break;
            case 'straight-relationships':
                return 'adultStraightRelationships';
                break;
        }
        return false;
    }
}