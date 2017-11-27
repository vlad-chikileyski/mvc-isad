<?php

class CategoryMain
{

    public static function getSqlUnionForSuperCategory($category)
    {
        switch ($category) {
            case 'mobile-phones-accessories':
                return "SELECT * FROM MOBILE_PHONES_ACCESSORIES_MOBILE_PHONES WHERE status = 1 
                  UNION SELECT * FROM MOBILE_PHONES_ACCESSORIES_MOBILE_ACCESORIES WHERE status = 1";
                break;

            case 'electronics-home-appliances':
                return "SELECT * FROM ELECTRONICS_HOME_APPLIANCES_TV_AUDIO_VIDEO WHERE status = 1 
                  UNION SELECT * FROM ELECTRONICS_HOME_APPLIANCES_CAMERAS_IMAGING WHERE status = 1
                  UNION SELECT * FROM ELECTRONICS_HOME_APPLIANCES_COMPUTERS_TABLETS WHERE status = 1
                  UNION SELECT * FROM ELECTRONICS_HOME_APPLIANCES_HOME_APPLIANCES WHERE status = 1
                  UNION SELECT * FROM ELECTRONICS_HOME_APPLIANCES_VIDEO_GAMES_CONSOLES WHERE status = 1";
                break;

            case 'home-garden':
                return "SELECT * FROM HOME_GARDEN_DECORATION_ACCESSORIES WHERE status = 1 
                  UNION SELECT * FROM HOME_GARDEN_KITCHENWARE WHERE status = 1
                  UNION SELECT * FROM HOME_GARDEN_FURNITURE WHERE status = 1
                  UNION SELECT * FROM HOME_GARDEN_OTHER_HOME_GARDEN WHERE status = 1
                  UNION SELECT * FROM HOME_GARDEN_GARDEN_OUTDOOR WHERE status = 1";
                break;

            case 'fashion-beauty':
                return "SELECT * FROM FUNCTION_BEAUTY_CLOTHING_ACCESSORIES WHERE status = 1 
                  UNION SELECT * FROM FUNCTION_BEAUTY_JEWELRY_WATCHES WHERE status = 1
                  UNION SELECT * FROM FUNCTION_BEAUTY_HEALTH_BEAUTY_COSMETICS WHERE status = 1";
                break;

            case 'pets':
                return "SELECT * FROM PETS_CATS WHERE status = 1 
                  UNION SELECT * FROM PETS_FISHES WHERE status = 1
                  UNION SELECT * FROM PETS_DOGS WHERE status = 1
                  UNION SELECT * FROM PETS_HORSES WHERE status = 1
                  UNION SELECT * FROM PETS_BIRDS WHERE status = 1
                  UNION SELECT * FROM PETS_OTHER_PETS WHERE status = 1";
                break;

            case 'kids-babies':
                return "SELECT * FROM KIDS_BABIES_CLOTHES_FOR_KIDS_AND_BABIES WHERE status = 1 
                  UNION SELECT * FROM KIDS_BABIES_ACCESSORIES WHERE status = 1
                  UNION SELECT * FROM KIDS_BABIES_TOYS WHERE status = 1
                  UNION SELECT * FROM KIDS_BABIES_OTHER_KIDS_BABIES WHERE status = 1
                  UNION SELECT * FROM KIDS_BABIES_CRIBS_STROLLERS WHERE status = 1";
                break;

            case 'sporting-goods-bikes':
                return "SELECT * FROM SPORTING_GOODS_BIKES_SPORTING_GOODS WHERE status = 1 
                  UNION SELECT * FROM SPORTING_GOODS_BIKES_BIKES WHERE status = 1
                  UNION SELECT * FROM SPORTING_GOODS_BIKES_OUTDOOR_EQUIPMENT WHERE status = 1";
                break;

            case 'hobbies-music-art-books':
                return "SELECT * FROM HOBBIES_MUSIC_ART_BOOKS_ANTIQUES_COLLECTIBLES WHERE status = 1 
                  UNION SELECT * FROM HOBBIES_MUSIC_ART_BOOKS_TICKETS_VOUCHERS WHERE status = 1
                  UNION SELECT * FROM HOBBIES_MUSIC_ART_BOOKS_BOOKS WHERE status = 1
                  UNION SELECT * FROM HOBBIES_MUSIC_ART_BOOKS_OTHER_ITEMS WHERE status = 1
                  UNION SELECT * FROM HOBBIES_MUSIC_ART_BOOKS_MOVIES_MUSIC WHERE status = 1
                  UNION SELECT * FROM HOBBIES_MUSIC_ART_BOOKS_STUDY_TOOLS WHERE status = 1
                  UNION SELECT * FROM HOBBIES_MUSIC_ART_BOOKS_MUSICAL_INSTRUMENTS WHERE status = 1";
                break;

            case 'business-industrial':
                return "SELECT * FROM BUSINESS_INDUSTRIAL_FACTORIES_EQUIPMENT WHERE status = 1 
                  UNION SELECT * FROM BUSINESS_INDUSTRIAL_RESTAURANTS_EQUIPMENT WHERE status = 1
                  UNION SELECT * FROM BUSINESS_INDUSTRIAL_MEDICAL_EQUIPMENT WHERE status = 1
                  UNION SELECT * FROM BUSINESS_INDUSTRIAL_SHOPS_LIQUIDATION WHERE status = 1
                  UNION SELECT * FROM BUSINESS_INDUSTRIAL_HEAVY_EQUIPMENT WHERE status = 1
                  UNION SELECT * FROM BUSINESS_INDUSTRIAL_OTHER_BUSINESS_INDUSTRIAL WHERE status = 1";
                break;

            case 'services':
                return "SELECT * FROM SERVICES_BUSINESS_SERVICES WHERE status = 1 
                  UNION SELECT * FROM SERVICES_EVENTS WHERE status = 1
                  UNION SELECT * FROM SERVICES_OTHER_SERVICES WHERE status = 1
                  UNION SELECT * FROM SERVICES_PRIVATE_TUTORS WHERE status = 1
                  UNION SELECT * FROM SERVICES_CAR_REPAIRS WHERE status = 1
                  UNION SELECT * FROM SERVICES_HOME WHERE status = 1
                  UNION SELECT * FROM SERVICES_PERSONAL_SERVICES WHERE status = 1
                  UNION SELECT * FROM SERVICES_DOMESTIC_SERVICES WHERE status = 1
                  UNION SELECT * FROM SERCVICES_MOVERS WHERE status = 1
                  UNION SELECT * FROM SERVICES_PETS WHERE status = 1";
                break;
            default:
                return false;

            /*
              case 'adult':
                  switch ($urlSubParam) {
                      case'adult-dating':
                          return 'ADULT_ADULT_DATING';
                          break;
                      case'swingers':
                          return 'ADULT_SWINGERS';
                          break;
                      case'gay-escort':
                          return 'ADULT_GAY_ESCORT';
                          break;
                      case'escorts-and-massages':
                          return 'ADULT_ESCORT_AND_MASSAGES';
                          break;
                      case'adult-entertainment':
                          return 'ADULT_ADULT_ENTERTAINMENT';
                          break;
                      case'adult-jobs':
                          return 'ADULT_ADULT_JOBS';
                          break;
                      case'gay-and-lesbian':
                          return 'ADULT_GAY_AND_LESBIAN';
                          break;
                      case'friendship-friends':
                          return 'ADULT_FRIENDSHIP_FRIENDS';
                          break;
                      case'straight-relationships':
                          return 'ADULT_STRAIGHT_RELATIONSHIPS';
                          break;
                      default:
                          return false;
                  }
                  break;*/
        }
        return false;

    }

    public static function getSubcategyListByCategoryFilter($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnectionOnCatics();
            $subcategory = array();
            $result = $db->query('SELECT * FROM `catalog_subcategory` WHERE category = "' . $categoryName . '" '
                . 'ORDER BY sort');
            $i = 0;
            while ($row = $result->fetch()) {
                $subcategory[$i]['sub_category_title'] = $row['sub_category_title'];
                $subcategory[$i]['category'] = $row['category'];
                $subcategory[$i]['subcategory_name'] = $row['subcategory_name'];
                $i++;
            }
            return $subcategory;
        }
    }

    /**
     * Get sub-category list ?
     * @return array
     */
    public static function getSubcategyListByCategory($categoryName = false)
    {
        if ($categoryName) {
            $db = Db::getConnectionOnCatics();
            $subcategory = array();
            $result = $db->query('SELECT * FROM `catalog_subcategory` WHERE category = "' . $categoryName . '"');
            $i = 0;
            while ($row = $result->fetch()) {
                $subcategory[$i]['url'] = $row['url'];
                $subcategory[$i]['category'] = $row['category'];
                $subcategory[$i]['subcategory_name'] = $row['subcategory_name'];
                $subcategory[$i]['sub_category_title'] = $row['sub_category_title'];
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

}