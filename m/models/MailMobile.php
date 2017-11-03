<?php

class MailMobile
{
    public static function sendEmail($toAddress, $message, $messageTitle)
    {
        require_once(ROOT . '/moduls/PHPMailer-master/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->Host = 'mx1.hostinger.pl';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@adtoday.co.uk';
        $mail->Password = 'P[$8Tv!va*9e:=]9QC';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '587';
        $mail->CharSet = 'UTF-8';

        $mail->From = 'info@adtoday.co.uk';
        $mail->FromName = 'Adtoday.co.uk';
        $mail->addAddress($toAddress, $toAddress);
        $mail->isHTML(true);
        $mail->Subject = $messageTitle;
        $mail->MsgHTML($message);
        $mail->AltBody = (strip_tags($message));
        if ($mail->send()) {
            return true;
        }
        echo 'Error:' . $mail->ErrorInfo;
        return false;
    }
}