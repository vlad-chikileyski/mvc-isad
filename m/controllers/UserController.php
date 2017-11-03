<?php

class UserController
{
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header("Location: http://m.adtoday.co.uk");
        exit;
    }
}