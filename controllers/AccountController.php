<?php

class AccountController
{

    public function actionIndex()
    {
        $userId = User::checkLogged();

        $user = User::getUserById($userId);
        require_once(ROOT . '/views/account/index.php');
        return true;
    }
}