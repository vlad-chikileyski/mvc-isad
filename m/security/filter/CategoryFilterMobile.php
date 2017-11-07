<?php

class CategoryFilterMobile
{
    public static function categoryCheckDoubleParam($urlParam, $urlSubParam)
    {
        switch ($urlParam) {
            /*electronics*/
            case 'vehicle':
                switch ($urlSubParam) {
                    case 'cars':
                        return 'VEHICLE_CARS';
                        break;
                    case 'boats':
                        return 'VEHICLE_BOATS';
                        break;
                    case 'car-accessories':
                        return 'VEHICLE_CAR_ACCESSORIES';
                        break;
                    case 'trucks-buses':
                        return 'VEHICLE_TRUCKS_BUSES';
                        break;
                    case 'motorcycles':
                        return 'VEHICLE_MOTORCYCLES';
                        break;
                    case 'other-vehicles':
                        return 'VEHICLE_OTHER_VEHICLES';
                        break;
                    default:
                        return false;
                }
                break;
            case 'properties':
                switch ($urlSubParam) {
                    case 'properties-for-rent':
                        return 'PROPERTIES_PROPERTIES_FOR_RENT';
                        break;
                    case 'properties-for-sale':
                        return 'PROPERTIES_PROPERTIES_FOR_SALE';
                        break;
                    default:
                        return false;

                }
                break;
            case 'mobile_phones_accessories':
                switch ($urlSubParam) {
                    case 'mobile-phones':
                        return 'MOBILE_PHONES_ACCESORIES_MOBILE_PHONES';
                        break;
                    case 'mobile-accessories':
                        return 'MOBILE_PHONES_ACCESORIES_MOBILE_ACCESORIES';
                        break;
                    case 'tv-audio-video':
                        return 'MOBILE_PHONES_ACCESORIES_TV_AUDIO_VIDEO';
                        break;
                    case 'cameras-imaging':
                        return 'MOBILE_PHONES_ACCESORIES_CAMERAS_IMAGING';
                        break;
                    case 'computers-tablets':
                        return 'MOBILE_PHONES_ACCESORIES_COMPUTERS_TABLETS';
                        break;
                    default:
                    case 'home-appliances':
                        return 'MOBILE_PHONES_ACCESORIES_HOME_APPLIANCES';
                        break;
                    default:
                    case 'video-games-consoles':
                        return 'MOBILE_PHONES_ACCESORIES_VIDEO_GAMES_CONSOLES';
                        break;
                    default:
                        return false;
                }
                break;
            case 'home_garden':
                switch ($urlSubParam) {
                    case 'decoration-accessories':
                        return 'HOME_GARDEN_DECORATION_ACCESSORIES';
                        break;
                    case 'kitchenware':
                        return 'HOME_GARDEN_KITCHENWARE';
                        break;
                    case 'furniture':
                        return 'HOME_GARDEN_FURNITURE';
                        break;
                    case 'other-home-garden':
                        return 'HOME_GARDEN_OTHER_HOME_GARDEN';
                        break;
                    case 'garden-outdoor':
                        return 'HOME_GARDEN_GARDEN_OUTDOOR';
                        break;
                    default:
                        return false;
                }
                break;
            case 'fashion_beauty':
                switch ($urlSubParam) {
                    case 'clothing-accessories':
                        return 'FUNCTION_BEAUTY_CLOTHING_ACCESSORIES';
                        break;
                    case 'jewelry-watches':
                        return 'FUNCTION_BEAUTY_JEWELRY_WATCHES';
                        break;
                    case 'health-beauty-cosmetics':
                        return 'FUNCTION_BEAUTY_HEALTH_BEAUTY_COSMETICS';
                        break;
                    default:
                        return false;
                }
                break;

            case 'pets':
                switch ($urlSubParam) {
                    case 'cats':
                        return 'PETS_CARS';
                        break;
                    case 'fishes':
                        return 'PETS_FISHES';
                        break;
                    case 'dogs':
                        return 'PETS_DOGS';
                        break;
                    case 'birds':
                        return 'PETS_BIRDS';
                        break;
                    case 'horses':
                        return 'PETS_HORSES';
                        break;
                    case 'other-pets':
                        return 'PETS_OTHER_PETS';
                        break;
                    default:
                        return false;
                }
                break;
            case 'kids_babies':
                switch ($urlSubParam) {
                    case 'clothes-for-kids-and-babies':
                        return 'KIDS_BABIES_CLOTHES_FOR_KIDS_AND_BABIES';
                        break;
                    case 'accessories':
                        return 'KIDS_BABIES_ACCESSORIES';
                        break;
                    case 'toys':
                        return 'KIDS_BABIES_TOYS';
                        break;
                    case 'other-kids-babies':
                        return 'KIDS_BABIES_OTHER_KIDS_BABIES';
                        break;
                    case 'cribs-strollers':
                        return 'KIDS_BABIES_CRIBS_STROLLERS';
                        break;
                    default:
                        return false;
                }
                break;
            case 'sporting_goods_bikes':
                switch ($urlSubParam) {
                    case 'sporting-goods':
                        return
                            'SPORTING_GOODS_BIKES_SPORTING_GOODS';
                        break;
                    case'bikes':
                        return 'SPORTING_GOODS_BIKES_BIKES';
                        break;
                    case 'outdoor-equipment':
                        return 'SPORTING_GOODS_BIKES_OUTDOOR_EQUIPMENT';
                        break;
                    default:
                        return false;
                }
                break;
            case'hobbies_music_art_books':
                switch ($urlSubParam) {
                    case'antiques-collectibles':
                        return 'HOBBIES_MUSIC_ART_BOOKS_ANTIQUES_COLLECTIBLES';
                        break;
                    case'musical-instruments':
                        return 'HOBBIES_MUSIC_ART_BOOKS_MUSICAL_INSTRUMENTS';
                        break;
                    case'tickets-vouchers':
                        return 'HOBBIES_MUSIC_ART_BOOKS_TICKETS_VOUCHERS';
                        break;
                    case'books':
                        return 'HOBBIES_MUSIC_ART_BOOKS_BOOKS';
                        break;
                    case'other-items':
                        return 'HOBBIES_MUSIC_ART_BOOKS_OTHER_ITEMS';
                        break;
                    case'movies-music':
                        return 'HOBBIES_MUSIC_ART_BOOKS_MOVIES_MUSIC';
                        break;
                    case'study-tools':
                        return 'HOBBIES_MUSIC_ART_BOOKS_STUDY_TOOLS';
                        break;
                    default:
                        return false;
                }
                break;
            case'jobs':
                switch ($urlSubParam) {
                    case'accounting':
                        return 'JOBS_ACCOUNTING';
                        break;
                    case'business-development':
                        return 'JOBS_BUSINESS_DEVELOPMENT';
                        break;
                    case'education':
                        return 'JOBS_ADUCATION';
                        break;
                    case'hospitality':
                        return 'JOBS_HOSPITALITY';
                        break;
                    case'marketing-pr':
                        return 'JOBS_MARKETING_PR';
                        break;
                    case'retail':
                        return 'JOBS_RETAIL';
                        break;
                    case'architecture-engineering':
                        return 'JOBS_ARCHITECTURE_ENGINEERING';
                        break;
                    case'construction':
                        return 'JOBS_CONSTRUCTION';
                        break;
                    case'executive':
                        return 'JOBS_EXECUTIVE';
                        break;
                    case'it-telecom':
                        return 'JOBS_IT_TELECOM';
                        break;
                    case'medical-health':
                        return 'JOBS_MADICAL_HEALTH';
                        break;
                    case'seles':
                        return 'JOBS_SALES';
                        break;
                    case'art-design':
                        return 'JOBS_ART_DESIGN';
                        break;
                    case'consulting':
                        return 'JOBS_CONSULTING';
                        break;
                    case'hr-recruiting':
                        return 'JOBS_HR_RECRUITING';
                        break;
                    case'jobs-wanted':
                        return 'JOBS_JOBS_WANTED';
                        break;
                    case'other':
                        return 'JOBS_OTHER';
                        break;
                    case'secretarial':
                        return 'JOBS_SECRETARIAL';
                        break;
                    default:
                        return false;
                }
                break;
            case'business_industrial':
                switch ($urlSubParam) {
                    case'factories-equipment':
                        return 'BUSINESS_INDUSTRIAL_FACTORIES_EQUIPMENT';
                        break;
                    case'restaurants-equipments':
                        return 'BUSINESS_INDUSTRIAL_RESTAURANTS_EQUIPMENT';
                        break;
                    case'medical-equipment':
                        return 'BUSINESS_INDUSTRIAL_MEDICAL_EQUIPMENT';
                        break;
                    case'shops-liquidation':
                        return 'BUSINESS_INDUSTRIAL_SHOPS_LIQUIDATION';
                        break;
                    case'heavy-equipment':
                        return 'BUSINESS_INDUSTRIAL_HEAVY_EQUIPMENT';
                        break;
                    case'other-business-industrial':
                        return 'BUSINESS_INDUSTRIAL_OTHER_BUSINESS_INDUSTRIAL';
                        break;
                    default:
                        return false;
                }
                break;
            case'services':
                switch ($urlSubParam) {
                    case'business-services':
                        return 'SERVICES_BUSINESS_SERVICES';
                        break;
                    case'events':
                        return 'SERVICES_EVENTS';
                        break;
                    case'other-services':
                        return 'SERVICES_OTHER_SERVICES';
                        break;
                    case'private-tutors':
                        return 'SERVICES_PRIVATE_TUTORS';
                        break;
                    case'car-repairs':
                        return 'SERVICES_CAR_REPAIRS';
                        break;
                    case'home':
                        return 'SERVICES_HOME';
                        break;
                    case'personal-services':
                        return 'SERVICES_PERSONAL_SERVICES';
                        break;
                    case'domestic-services':
                        return 'SERVICES_DOMESTIC_SERVICES';
                        break;
                    case'movers':
                        return 'SERCVICES_MOVERS';
                        break;
                    case'pets':
                        return 'SERVICES_PETS';
                        break;
                    default:
                        return false;
                }
                break;
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
                break;
        }
    }
}