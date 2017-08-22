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

        // Retrieve the email template required
        $message = file_get_contents(ROOT. '/views/mail/activate.html');

        // Replace the % with the actual information
        /* $message = str_replace('%username%', $username, $message);
         $message = str_replace('%password%', $password, $message);*/
        $mail->Subject = 'Message title';
        //Set the message
        $mail->MsgHTML($message);
        $mail->AltBody = (strip_tags($message));
        if ($mail->send()) {
            return true;
        }
        echo 'Error:' . $mail->ErrorInfo;
        return false;


    }

    public static function sendQuestionOfPayerEmail($toAddress)
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

        // Retrieve the email template required
        $message = file_get_contents(ROOT. '/views/mail/payer_question.html');

        // Replace the % with the actual information
        /* $message = str_replace('%username%', $username, $message);
         $message = str_replace('%password%', $password, $message);*/
        $mail->Subject = 'Message title';
        //Set the message
        $mail->MsgHTML($message);
        $mail->AltBody = (strip_tags($message));
        if ($mail->send()) {
            return true;
        }
        echo 'Error:' . $mail->ErrorInfo;
        return false;


    }
    public static function sendUserRegisterSuccessStatus($toAddress)
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

        // Retrieve the email template required
        $message = file_get_contents(ROOT. '/views/mail/success_message.html');

        // Replace the % with the actual information
        /* $message = str_replace('%username%', $username, $message);
         $message = str_replace('%password%', $password, $message);*/
        $mail->Subject = 'Message title';
        //Set the message
        $mail->MsgHTML($message);
        $mail->AltBody = (strip_tags($message));
        if ($mail->send()) {
            return true;
        }
        echo 'Error:' . $mail->ErrorInfo;
        return false;


    }
}