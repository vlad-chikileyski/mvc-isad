<?php

class UtilsFilter
{
    public static function SecReqFilterSearch($string)
    {
        $patterns = array();
        $patterns[0] = '?key=';
        $patterns[1] = '%27';
        $patterns[2] = '%20';
        $replacements = array();
        $replacements[0] = '';
        $replacements[1] = '';
        $replacements[2] = ' ';
        $VAR_VALUE = str_replace($patterns, $replacements, $string);
        return $VAR_VALUE;
    }

    public static function SecReqFilterSearchMainPage($string)
    {
        $search = trim(substr($string, 0, 64)); // Это можно убрать, это ограничение на 64 символа в поиске
        $search = preg_replace("#\#s=#msi", "", $search);
        $search = preg_replace("/[^\w\x7F-\xFF\s]/", " ", $search);
        $search = preg_replace("#  +#msi", " ", $search);
        return $search;
    }
}