<?php


class FormMobile
{
    public static function getFormByCategoryName($categoryName, $subCategory)
    {
        if ($categoryName != null) {
            switch ($categoryName) {
                case "adult":
                    switch ($subCategory) {
                        case "adult-jobs":
                            return require_once "../views/form/adult/adult-jobs.html";
                            break;
                        case 'adult-dating':
                            return require_once "../views/form/adult/adult-dating.html";
                            break;
                        case 'swingers':
                            return require_once "../views/form/adult/swingers.html";
                            break;
                        case 'escorts-and-massages':
                            return require_once "../views/form/adult/escorts-and-massages.html";
                            break;
                        case 'gay-escorts':
                            return require_once "../views/form/adult/gay-escorts.html";
                            break;
                        case 'adult-entertainment':
                            return require_once "../views/form/adult/adult-entertainment.html";
                            break;
                        case 'gay-and-lesbian':
                            return require_once "../views/form/adult/gay-and-lesbian.html";
                            break;
                        case 'friendship-friends':
                            return require_once "../views/form/adult/friendship-friends.html";
                            break;
                        case 'straight-relationships':
                            return require_once "../views/form/adult/straight-relationships.html";
                            break;
                    }
                case "vehicles":
                    switch ($subCategory) {
                        case "cars":
                            return require_once "../views/form/vehicles/cars.html";
                            break;
                        case 'boats':
                            return require_once "../views/form/vehicles/boats.html";
                            break;
                        case 'car-accessories':
                            return require_once "../views/form/vehicles/car-accessories.html";
                            break;
                        case 'trucks-buses':
                            return require_once "../views/form/vehicles/trucks-buses.html";
                            break;
                        case 'motorcycles':
                            return require_once "../views/form/vehicles/motorcycles.html";
                            break;
                        case 'other-vehicles':
                            return require_once "../views/form/vehicles/other-vehicles.html";
                            break;
                    }
                case "properties":
                    switch ($subCategory) {
                        case "properties-for-rent":
                            return require_once "../views/form/properties/properties-for-rent.html";
                            break;
                        case 'properties-for-sale':
                            return require_once "../views/form/properties/properties-for-sale.html";
                            break;
                    }
                case "mobile-phones-accessories":
                    switch ($subCategory) {
                        case "mobile-phones":
                            return require_once "../views/form/mobile-phones-accessories/mobile-phones.html";
                            break;
                        case 'mobile-accessories':
                            return require_once "../views/form/mobile-phones-accessories/mobile-accessories.html";
                            break;
                    }
                case "electronics-home-appliances":
                    switch ($subCategory) {
                        case "tv-audio-video":
                            return require_once "../views/form/electronics-home-appliances/tv-audio-video.html";
                            break;
                        case 'cameras-imaging':
                            return require_once "../views/form/electronics-home-appliances/cameras-imaging.html";
                            break;
                        case 'computers-tablets':
                            return require_once "../views/form/electronics-home-appliances/computers-tablets.html";
                            break;
                        case 'home-appliances':
                            return require_once "../views/form/electronics-home-appliances/home-appliances.html";
                            break;
                        case 'video-games-consoles':
                            return require_once "../views/form/electronics-home-appliances/video-games-consoles.html";
                            break;
                    }
                case "home-garden":
                    switch ($subCategory) {
                        case "decoration-accessories":
                            return require_once "../views/form/home-garden/decoration-accessories.html";
                            break;
                        case 'kitchenware':
                            return require_once "../views/form/home-garden/kitchenware.html";
                            break;
                        case 'furniture':
                            return require_once "../views/form/home-garden/furniture.html";
                            break;
                        case 'other-home-garden':
                            return require_once "../views/form/home-garden/other-home-garden.html";
                            break;
                        case 'garden-outdoor':
                            return require_once "../views/form/home-garden/garden-outdoor.html";
                            break;
                    }
                case "fashion-beauty":
                    switch ($subCategory) {
                        case "clothing-accessories":
                            return require_once "../views/form/fashion-beauty/clothing-accessories.html";
                            break;
                        case 'jewelry-watches':
                            return require_once "../views/form/fashion-beauty/jewelry-watches.html";
                            break;
                        case 'health-beauty-cosmetics':
                            return require_once "../views/form/fashion-beauty/health-beauty-cosmetics.html";
                            break;
                    }
                case "pets":
                    switch ($subCategory) {
                        case "cats":
                            return require_once "../views/form/pets/cats.html";
                            break;
                        case 'fishes':
                            return require_once "../views/form/pets/fishes.html";
                            break;
                        case 'dogs':
                            return require_once "../views/form/pets/dogs.html";
                            break;
                        case 'birds':
                            return require_once "../views/form/pets/birds.html";
                            break;
                        case 'horses':
                            return require_once "../views/form/pets/horses.html";
                            break;
                        case 'other-pets':
                            return require_once "../views/form/pets/other-pets.html";
                            break;
                    }
                case "kids-babies":
                    switch ($subCategory) {
                        case "clothes-for-kids-and-babies":
                            return require_once "../views/form/kids-babies/clothes-for-kids-and-babies.html";
                            break;
                        case 'accessories':
                            return require_once "../views/form/kids-babies/accessories.html";
                            break;
                        case 'kids-babies-toys':
                            return require_once "../views/form/kids-babies/toys.html";
                            break;
                        case 'other-kids-babies':
                            return require_once "../views/form/kids-babies/other-kids-babies.html";
                            break;
                        case 'cribs-strollers':
                            return require_once "../views/form/kids-babies/cribs-strollers.html";
                            break;
                    }
                case "sporting-goods-bikes":
                    switch ($subCategory) {
                        case "sporting-goods":
                            return require_once "../views/form/sporting-goods-bikes/sporting-goods.html";
                            break;
                        case 'bikes':
                            return require_once "../views/form/sporting-goods-bikes/bikes.html";
                            break;
                        case 'outdoor-equipment':
                            return require_once "../views/form/sporting-goods-bikes/outdoor-equipment.html";
                            break;
                    }
                case "hobbies-music-art-books":
                    switch ($subCategory) {
                        case "antiques-collectibles":
                            return require_once "../views/form/hobbies-music-art-books/antiques-collectibles.html";
                            break;
                        case 'musical-instruments':
                            return require_once "../views/form/hobbies-music-art-books/musical-instruments.html";
                            break;
                        case 'tickets-vouchers':
                            return require_once "../views/form/hobbies-music-art-books/tickets-vouchers.html";
                            break;
                        case 'books':
                            return require_once "../views/form/hobbies-music-art-books/books.html";
                            break;
                        case 'other-items':
                            return require_once "../views/form/hobbies-music-art-books/other-items.html";
                            break;
                        case 'movies-music':
                            return require_once "../views/form/hobbies-music-art-books/movies-music.html";
                            break;
                        case 'study-tools':
                            return require_once "../views/form/hobbies-music-art-books/study-tools.html";
                            break;
                    }
                case "jobs":
                    switch ($subCategory) {
                        case "accounting":
                            return require_once "../views/form/jobs/accounting.html";
                            break;
                        case 'business-development':
                            return require_once "../views/form/jobs/business-development.html";
                            break;
                        case 'education':
                            return require_once "../views/form/jobs/education.html";
                            break;
                        case 'hospitality':
                            return require_once "../views/form/jobs/hospitality.html";
                            break;
                        case 'marketing-pr':
                            return require_once "../views/form/jobs/marketing-pr.html";
                            break;
                        case 'retail':
                            return require_once "../views/form/jobs/retail.html";
                            break;
                        case 'architecture-engineering':
                            return require_once "../views/form/jobs/architecture-engineering.html";
                            break;
                        case 'construction':
                            return require_once "../views/form/jobs/construction.html";
                            break;
                        case 'executive':
                            return require_once "../views/form/jobs/executive.html";
                            break;
                        case 'it-telecom':
                            return require_once "../views/form/jobs/it-telecom.html";
                            break;
                        case 'medical-health':
                            return require_once "../views/form/jobs/medical-health.html";
                            break;
                        case 'sales':
                            return require_once "../views/form/jobs/sales.html";
                            break;
                        case 'art-design':
                            return require_once "../views/form/jobs/art-design.html";
                            break;
                        case 'consulting':
                            return require_once "../views/form/jobs/consulting.html";
                            break;
                        case 'hr-recruiting':
                            return require_once "../views/form/jobs/hr-recruiting.html";
                            break;
                        case 'jobs-wanted':
                            return require_once "../views/form/jobs/jobs-wanted.html";
                            break;
                        case 'other':
                            return require_once "../views/form/jobs/other.html";
                            break;
                        case 'secretarial':
                            return require_once "../views/form/jobs/secretarial.html";
                            break;
                    }
                case "business-industrial":
                    switch ($subCategory) {
                        case "factories-equipment":
                            return require_once "../views/form/business-industrial/factories-equipment.html";
                            break;
                        case 'restaurants-equipments':
                            return require_once "../views/form/business-industrial/restaurants-equipments.html";
                            break;
                        case 'medical-equipment':
                            return require_once "../views/form/business-industrial/medical-equipment.html";
                            break;
                        case 'shops-liquidation':
                            return require_once "../views/form/business-industrial/shops-liquidation.html";
                            break;
                        case 'heavy-equipment':
                            return require_once "../views/form/business-industrial/heavy-equipment.html";
                            break;
                        case 'other-business-industrial':
                            return require_once "../views/form/business-industrial/other-business-industrial.html";
                            break;
                    }
                case "services":
                    switch ($subCategory) {
                        case "business-services":
                            return require_once "../views/form/services/business-services.html";
                            break;
                        case 'events':
                            return require_once "../views/form/services/events.html";
                            break;
                        case 'other-services':
                            return require_once "../views/form/services/other-services.html";
                            break;
                        case 'private-tutors':
                            return require_once "../views/form/services/private-tutors.html";
                            break;
                        case 'car-repairs':
                            return require_once "../views/form/services/car-repairs.html";
                            break;
                        case 'home':
                            return require_once "../views/form/services/home.html";
                            break;
                        case 'personal-services':
                            return require_once "../views/form/services/personal-services.html";
                            break;
                        case 'domestic-services':
                            return require_once "../views/form/services/domestic-services.html";
                            break;
                        case 'movers':
                            return require_once "../views/form/services/movers.html";
                            break;
                        case 'pets':
                            return require_once "../views/form/services/pets.html";
                            break;
                    }
            }
        }
        return false;
    }

    public static function getPostFormMethodNameByCatName($formType)
    {
        if ($formType != null) {
            switch ($formType) {
                case "adult-jobs":
                    return "adultJobs";
                    break;
                case 'adult-dating':
                    return "adultDating";
                    break;
                case 'swingers':
                    return "adultSwingers";
                    break;
                case 'escorts-and-massages':
                    return "adultEscortsAndMassages";
                    break;
                case 'gay-escorts':
                    return "adultGayEscorts";
                    break;
                case 'adult-entertainment':
                    return "adultEntertainment";
                    break;
                case 'gay-and-lesbian':
                    return "adultGayAndLesbian";
                    break;
                case 'friendship-friends':
                    return "adultFriendshipFriends";
                    break;
                case 'straight-relationships':
                    return "adultStraightRelationships";
                    break;
            }
        }
        return false;
    }
}