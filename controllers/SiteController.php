<?php

include_once ROOT . '/models/Product.php';

class SiteController
{

    public function actionIndex()
    {
        $name = '';
        $password = '';
        $email = '';
        $result = false;
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Name must be > 4 symbols';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be > 5 symbols';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Invalid email type!';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'This email already exists!';
            }
            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}