<?php

class MailBuilderMobile
{

    /**
     * Information builder & for sending mail
     * {activate your account}
     */
    public static function configureMailForSuccessPayment($userEmail)
    {
        // Retrieve the email template required
        $message = file_get_contents(ROOT . '/views/mail/Qsuccess_payments.html');
/*        $message = str_replace('%username%', $username, $message);*/
        $message = str_replace('%user_login%', $userEmail, $message);
        $message = str_replace('%mobile_number%', '+00000000000', $message);
        $messageTitle = 'Confirmation of registration on the portal AdToday.co.uk';
        if (MailMobile::sendEmail($userEmail, $message, $messageTitle)) {
            return true;
        }
        return false;
    }

    /**
     * Information builder & for sending mail
     * {activate your account}
     */
    public static function configureMailForActivateAccount($userEmail, $username)
    {
        // Retrieve the email template required
        $message = file_get_contents(ROOT . '/views/mail/Qaccount_activate.html');
        $message = str_replace('%username%', $username, $message);
        $message = str_replace('%user_login%', $userEmail, $message);
        $message = str_replace('%mobile_number%', '+00000000000', $message);
        $messageTitle = 'Confirmation of registration on the portal AdToday.co.uk';
        if (MailMobile::sendEmail($userEmail, $message, $messageTitle)) {
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