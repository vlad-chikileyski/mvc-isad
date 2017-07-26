<?php


class Mail
{

    public static function sendEmail($requestStatus, $userImail)
    {
        if($requestStatus!=false){
            $adminEmail = 'info@adtoday.co.uk';
            $message = "Hej )) From {$adminEmail}";
            $subject = "Email Title";
            $result = mail($adminEmail, $subject, $message);
            $result = true;
            return true;
        }
    }
}