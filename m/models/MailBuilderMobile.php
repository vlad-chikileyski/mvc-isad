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

    public static function configureMailForChangePassword($usermail,$username,$ID_TOKEN,$KEY_TOKEN)
    {
        // Retrieve the email template required
        $message = file_get_contents(ROOT . '/views/mail/Qchange_password.html');
        $message = str_replace('%username%', $username, $message);
        $message = str_replace('%user_login%', $usermail, $message);
        $message = str_replace('%key%', $ID_TOKEN, $message);
        $message = str_replace('%token%', $KEY_TOKEN, $message);
        $message = str_replace('%mobile_number%', '+00000000000', $message);
        $messageTitle = 'Confirmation of password change on AdToday.co.uk';
        if (MailMobile::sendEmail($usermail, $message, $messageTitle)) {
            return true;
        }
        return false;
    }

    /**
     * Information builder & for sending mail
     * {activate your ads}
     */
    public static function configureMailForActivateAds($userEmail, $username, $key, $token)
    {
        // Retrieve the email template required
        $message = file_get_contents(ROOT . '/views/mail/Qads_activate.html');
        $message = str_replace('%username%', $username, $message);
        $message = str_replace('%user_login%', $userEmail, $message);
        $message = str_replace('%user_url_activate%', "https://adtoday.co.uk/mail/activate/" . $key ."/" . $token, $message);
        $message = str_replace('%mobile_number%', '+00000000000', $message);
        $messageTitle = 'Active your ad on the portal AdToday.co.uk';
        if (MailMobile::sendEmail($userEmail, $message, $messageTitle)) {
            return true;
        }
        return false;
    }
}