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
                case "properties":
                    switch ($subCategory) {
                        case "properties-for-rent":
                            return require_once "../views/form/properties/properties-for-rent.html";
                            break;
                        case 'properties-for-sale':
                            return require_once "../views/form/properties/properties-for-sale.html";
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