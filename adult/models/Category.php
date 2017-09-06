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
            case 'gay-escorts':
                return 'gay-escorts';
                break;
            case 'adult-entertainment':
                return 'adult-entertainment';
                break;
            case 'adult-jobs':
                return 'adult-jobs';
                break;
            case 'swingers':
                return 'swingers';
                break;
            /* case 'webcams':
                 return 'webcams';
                 break;*/
            case 'escorts-massages':
                return 'escorts-assages';
                break;
        }
        return false;
    }

    /**
     * Check - category exists ?
     * @return bool
     */
    public static function categoryCheckDoubleParam($urlParam, $urlSubParam)
    {
        switch ($urlParam) {
            /*electronics*/
            case 'electronics':
                switch ($urlSubParam) {
                    case 'tablets':
                        return 'electrTabletsNics';
                        break;
                    case 'phones':
                        return 'electrPhonesNics';
                        break;
                    case 'dvd-blu-ray':
                        return 'electrDvdBluRayNics';
                        break;
                    case 'accessories':
                        return 'electrAccessoriesNics';
                        break;
                    case 'tv':
                        return 'electrTvNics';
                        break;
                    case 'photo':
                        return 'electrPhotoNics';
                        break;
                    case 'computers':
                        return 'electrComputersNics';
                        break;
                    case 'games-and-consoles':
                        return 'electrGamesAndConsolesNics';
                        break;
                    case 'mp3-and-audio':
                        return 'electrMp3AndAudioNics';
                        break;
                    default:
                        return false;
                }
                break;
            case 'mobiles':
                switch ($urlSubParam) {


                }
                return 'mobilesTablets';
                break;
            case 'furniture':
                switch ($urlSubParam) {


                }
                return 'furnitureTablets';
                break;
            case 'services':
                switch ($urlSubParam) {


                }
                return 'servicesTablets';
                break;
            case 'education':
                switch ($urlSubParam) {


                }
                return 'servicesTablets';
                break;
            case 'animals':
                switch ($urlSubParam) {


                }
                return 'servicesTablets';
                break;
            case 'fashion':
                switch ($urlSubParam) {


                }
                return 'servicesTablets';
                break;
            case 'baby-products':
                switch ($urlSubParam) {


                }
                return 'servicesTablets';
                break;
        }
        return false;
    }
}