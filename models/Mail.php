<?php

class Mail
{

    public static function sendActivateEmail($toAddress)
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

        $mail->Subject = 'Message title';
        $mail->Body = '<html> Hello my '.$toAddress.' <p style="background-color: brown">Friend</p>!</html>';
        $mail->AltBody = 'Hello my Friend!';

        if ($mail->send()) {
            return true;
        }
        echo 'Error:' . $mail->ErrorInfo;
        return false;


    }
}