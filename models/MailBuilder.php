<?php

class MailBuilder
{
    /**
     * Information builder & for sending mail
     * {activate your account}
     */
    public static function configureMailForActivateAccount($userEmail)
    {
        // Retrieve the email template required
        $message = file_get_contents(ROOT . '/views/mail/Qaccount_activate.html');
        /*$message = str_replace('%username%', $username, $message);
        $message = str_replace('%password%', $password, $message);*/
        if (Mail::sendEmail($userEmail, $message)) {
            return true;
        }
        return false;
    }

    /**
     * Information builder & for sending mail
     * {activate your ads}
     */
    public static function configureMailForActivateAds($userEmail)
    {

    }
}