<?php

class CategoryMobile
{
    /**
     * Get sub-category list ?
     * @return array
     */
    /**
     * Get sub-category list ?
     * @return array
     */
    public static function getSubcategyListByCategory($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnectionOnCatics();
            $subcategory = array();
            $result = $db->query('SELECT * FROM `category-menu` WHERE category = "'.$categoryName.'" '
                .'AND status = 1 ORDER BY position');
            $i = 0;
            while ($row = $result->fetch()) {
                $subcategory[$i]['menu-title'] = $row['menu-title'];
                $subcategory[$i]['url-title'] = $row['url-title'];
                $subcategory[$i]['category'] = $row['category'];
                $subcategory[$i]['subcategory-name'] = $row['subcategory-name'];
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
            case 'electronics':
                return 'electronics';
                break;
            case 'mobiles':
                return 'mobiles';
                break;
            case 'furniture':
                return 'furniture';
                break;
            case 'services':
                return 'services';
                break;
            case 'education':
                return 'education';
                break;
            case 'animals':
                return 'animals';
                break;
            case 'fashion':
                return 'fashion';
                break;
            case 'baby-products':
                return 'baby-products';
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
                switch ($urlSubParam){
                    case 'tablets': return 'electrTabletsNics'; break;
                    case 'phones': return 'electrPhonesNics'; break;
                    case 'dvd-blu-ray': return 'electrDvdBluRayNics'; break;
                    case 'accessories': return 'electrAccessoriesNics'; break;
                    case 'tv': return 'electrTvNics'; break;
                    case 'photo': return 'electrPhotoNics'; break;
                    case 'computers': return 'electrComputersNics'; break;
                    case 'games-and-consoles': return 'electrGamesAndConsolesNics'; break;
                    case 'mp3-and-audio': return 'electrMp3AndAudioNics'; break;
                    default: return false;
                }
                break;
            case 'mobiles':
                switch ($urlSubParam){


                }
                return 'mobilesTablets';
                break;
            case 'furniture':
                switch ($urlSubParam){


                }
                return 'furnitureTablets';
                break;
            case 'services':
                switch ($urlSubParam){


                }
                return 'servicesTablets';
                break;
            case 'education':
                switch ($urlSubParam){


                }
                return 'servicesTablets';
                break;
            case 'animals':
                switch ($urlSubParam){


                }
                return 'servicesTablets';
                break;
            case 'fashion':
                switch ($urlSubParam){


                }
                return 'servicesTablets';
                break;
            case 'baby-products':
                switch ($urlSubParam){


                }
                return 'servicesTablets';
                break;
        }
        return false;
    }
}
