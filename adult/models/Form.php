<?php


class Form
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
                    return "swingers";
                    break;
                case 'escorts-and-massages':
                    return "escortsAndMassages";
                    break;
                case 'gay-escorts':
                    return "gayEscorts";
                    break;
                case 'adult-entertainment':
                    return "adultEntertainment";
                    break;
                case 'gay-and-lesbian':
                    return "gayAndLesbian";
                    break;
                case 'friendship-friends':
                    return "friendshipFriends";
                    break;
                case 'straight-relationships':
                    return "straightRelationships";
                    break;
            }
        }
        return false;
    }

    public static function escortsAndMassages($userId, $tableName, $POST, $postcode, $name, $userInfoEmail, $phone, $paymentType)
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

        $recordId = Post::save($userId, $tableName, $title, $adtype, $description, $gender, $ethnicity,
            $itemAgeValue, $postcode, $name, $userInfoEmail,
            $phone, $paymentType, json_encode($language), json_encode($interests), json_encode($servfor), $col1incallrow1, $col2outcallrow1, $col1incallrow2,
            $col2outcallrow2, $col1incallrow3, $col2outcallrow3, $col1incallrow4, $col2outcallrow4,
            $col1incallrow5, $col2outcallrow5, $col1incallrow6, $col2outcallrow6);
        return $recordId;
    }
}