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
}