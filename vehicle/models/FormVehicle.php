<?php


class FormVehicle
{
    public static function getFormByCategoryName($formType)
    {
        if ($formType != null) {
            switch ($formType) {
                case "adult-jobs":
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/adult-jobs.html');
                    break;
                case 'adult-dating':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/adult-dating.html');
                    break;
                case 'swingers':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/swingers.html');
                    break;
                case 'escorts-and-massages':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/escorts-and-massages.html');
                    break;
                case 'gay-escorts':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/gay-escorts.html');
                    break;
                case 'adult-entertainment':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/adult-entertainment.html');
                    break;
                case 'gay-and-lesbian':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/gay-and-lesbian.html');
                    break;
                case 'friendship-friends':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/friendship-friends.html');
                    break;
                case 'straight-relationships':
                    return $FILE_BUFFER = file_get_contents(ROOT . '/views/form/straight-relationships.html');
                    break;
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

    public static function adultEscortsAndMassages($userId, $tableName, $POST, $postcode, $name, $userInfoEmail, $phone, $paymentType)
    {
        $title = '';
        $adtype = '';
        $description = '';
        $gender = '';
        $ethnicity = '';
        $itemAgeValue = '';
        $language = array();
        $interests = array();
        $servfor = array();
        $col1incallrow1 = '';
        $col2outcallrow1 = '';
        $col1incallrow2 = '';
        $col2outcallrow2 = '';
        $col1incallrow3 = '';
        $col2outcallrow3 = '';
        $col1incallrow4 = '';
        $col2outcallrow4 = '';
        $col1incallrow5 = '';
        $col2outcallrow5 = '';
        $col1incallrow6 = '';
        $col2outcallrow6 = '';

        $title = $POST['title'];
        $adtype = $POST['adtype'];
        $description = $POST['description'];
        $gender = $POST['gender'];
        $ethnicity = $POST['ethnicity'];
        $itemAgeValue = $POST['item-age-value'];
        /**
         * Array Start
         */
        $language = $POST['language'];
        $interests = $POST['interests'];
        $servfor = $POST['servfor'];

        /**
         * Array End
         */
        $col1incallrow1 = $POST['col-1-incall-row-1'];
        $col2outcallrow1 = $POST['col-2-outcall-row-1'];
        $col1incallrow2 = $POST['col-1-incall-row-2'];
        $col2outcallrow2 = $POST['col-2-outcall-row-2'];
        $col1incallrow3 = $POST['col-1-incall-row-3'];
        $col2outcallrow3 = $POST['col-2-outcall-row-3'];
        $col1incallrow4 = $POST['col-1-incall-row-4'];
        $col2outcallrow4 = $POST['col-2-outcall-row-4'];
        $col1incallrow5 = $POST['col-1-incall-row-5'];
        $col2outcallrow5 = $POST['col-2-outcall-row-5'];
        $col1incallrow6 = $POST['col-1-incall-row-6'];
        $col2outcallrow6 = $POST['col-2-outcall-row-6'];

        $recordId = Post::saveEscortsAndMassages($userId, $tableName, $title, $adtype, $description, $gender, $ethnicity,
            $itemAgeValue, $postcode, $name, $userInfoEmail,
            $phone, $paymentType, json_encode($language), json_encode($interests), json_encode($servfor), $col1incallrow1, $col2outcallrow1, $col1incallrow2,
            $col2outcallrow2, $col1incallrow3, $col2outcallrow3, $col1incallrow4, $col2outcallrow4,
            $col1incallrow5, $col2outcallrow5, $col1incallrow6, $col2outcallrow6);
        return $recordId;
    }

    public static function adultFriendshipFriends($userId, $tableName, $POST, $postcode, $name, $userInfoEmail, $phone, $paymentType)
    {
        $title = '';
        $description = '';
        $gender = '';
        $itemAgeValue = '';

        $title = $POST['title'];
        $description = $POST['description'];
        $gender = $POST['gender'];
        $itemAgeValue = $POST['item-age-value'];


        $recordId = Post::saveFriendshipFriends($userId, $tableName, $title, $description, $gender,
            $itemAgeValue, $postcode, $name, $userInfoEmail,
            $phone, $paymentType);
        return $recordId;
    }

    public static function adultStraightRelationships($userId, $tableName, $POST, $postcode, $name, $userInfoEmail, $phone, $paymentType)
    {
        $title = '';
        $description = '';
        $itemAgeValue = '';
        $seekingtype = '';
        $title = $POST['title'];
        $description = $POST['description'];
        $itemAgeValue = $POST['item-age-value'];
        $seekingtype = $POST['seekingtype'];

        $recordId = Post::saveStraightRelationships($userId, $tableName, $title, $seekingtype, $description,
            $itemAgeValue, $postcode, $name, $userInfoEmail,
            $phone, $paymentType);
        return $recordId;
    }

    public static function adultGayEscorts($userId, $tableName, $POST, $postcode, $name, $userInfoEmail, $phone, $paymentType)
    {
        $title = '';
        $description = '';
        $gender = '';
        $ethnicity = '';
        $itemAgeValue = '';
        $language = array();
        $interests = array();
        $myservfor = array();
        $col1incallrow1 = '';
        $col2outcallrow1 = '';
        $col1incallrow2 = '';
        $col2outcallrow2 = '';
        $col1incallrow3 = '';
        $col2outcallrow3 = '';
        $col1incallrow4 = '';
        $col2outcallrow4 = '';
        $col1incallrow5 = '';
        $col2outcallrow5 = '';
        $col1incallrow6 = '';
        $col2outcallrow6 = '';

        $title = $POST['title'];
        $description = $POST['description'];
        $gender = $POST['gender'];
        $ethnicity = $POST['ethnicity'];
        $itemAgeValue = $POST['item-age-value'];
        /**
         * Array Start
         */
        $language = $POST['language'];
        $interests = $POST['interests'];
        $myservfor = $POST['myservfor'];
        $position = $POST['position'];

        /**
         * Array End
         */
        $col1incallrow1 = $POST['col-1-incall-row-1'];
        $col2outcallrow1 = $POST['col-2-outcall-row-1'];
        $col1incallrow2 = $POST['col-1-incall-row-2'];
        $col2outcallrow2 = $POST['col-2-outcall-row-2'];
        $col1incallrow3 = $POST['col-1-incall-row-3'];
        $col2outcallrow3 = $POST['col-2-outcall-row-3'];
        $col1incallrow4 = $POST['col-1-incall-row-4'];
        $col2outcallrow4 = $POST['col-2-outcall-row-4'];
        $col1incallrow5 = $POST['col-1-incall-row-5'];
        $col2outcallrow5 = $POST['col-2-outcall-row-5'];
        $col1incallrow6 = $POST['col-1-incall-row-6'];
        $col2outcallrow6 = $POST['col-2-outcall-row-6'];

        $recordId = Post::saveAdultGayEscorts($userId, $tableName, $title, $description, $gender, $ethnicity,
            $itemAgeValue, $postcode, $name, $userInfoEmail,
            $phone, $paymentType, json_encode($language), json_encode($interests), json_encode($myservfor), json_encode($position), $col1incallrow1, $col2outcallrow1, $col1incallrow2,
            $col2outcallrow2, $col1incallrow3, $col2outcallrow3, $col1incallrow4, $col2outcallrow4,
            $col1incallrow5, $col2outcallrow5, $col1incallrow6, $col2outcallrow6);
        return $recordId;
    }


}