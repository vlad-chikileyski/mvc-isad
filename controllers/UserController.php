<?php

class UserController
{
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header("Location: /");
    }
}