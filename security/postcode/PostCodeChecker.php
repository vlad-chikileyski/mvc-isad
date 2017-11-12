<?php

class PostCodeChecker
{

    public static function valid($post_code)
    {
        if (strlen($post_code) > 4) {
            $result = array();
            $result  = PostCode::getPostCodeData($post_code);
            return $result;
        }
        return false;
    }
}