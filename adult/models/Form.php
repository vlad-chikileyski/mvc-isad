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
            }
        }
        return false;
    }
}