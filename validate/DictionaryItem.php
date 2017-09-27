<?php

/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 26.09.17
 * Time: 21:44
 */
class DictionaryItem
{
    public static function checkPaymentType($paymentType = "free")
    {
        switch ($paymentType) {
            case "free":
                return 1;
                break;
            case "payment-method-test2":
                return 2;
                break;
            case "payment-method-test3":
                return 3;
                break;
            case "payment-method-test4":
                return 4;
                break;
            default: 1;
        }
        return false;
    }
}