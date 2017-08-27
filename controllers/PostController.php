<?php

class PostController
{
    public function actionIndex($categoryName)
    {
        $categoryChecker = Category::categoryCheck($categoryName);

        if ($categoryChecker == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {

            /**
             * check userIsLogged?
             * START
             */
            $userInfo = '';
            $userId = '';
            $newUserEmail = '';
            if (User::getUserById(User::checkId()) != null) {
                $userId = User::checkId();
                $userInfo = User::getUserById($userId);
            } else {
                $userInfo = false;
                $userId = false;
            }
            /*
             * END
             */
            $title = '';
            $subcategory = '';
            $description = '';
            $postcode = '';
            $name = '';
            $price = '';
            $notVerifyEmail = '';
            $phone = '';
            $result = false;
            $query_registration = false;
            /**
             * Validate & save in DB
             * @return: redirect to success page
             */

            if (isset($_POST['submit'])) {

                $title = $_POST['title'];
                $description = $_POST['description'];
                $postcode = $_POST['postcode'];
                $name = $_POST['name'];
                $notVerifyEmail = $_POST['email'];
                $phone = $_POST['phone'];
                $price = '12';
                $subcategory = lcfirst($_POST['subcategory']);
                $getTableName = Category::categoryCheckDoubleParam($categoryName, $subcategory);
                if ($getTableName == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                } else {

                    $errors = false;
                    if (!Post::checkEmail($notVerifyEmail)) {
                        $errors[] = 'Invalid email type!';
                    }
                    if ($errors == false) {
                        if ($userInfo != false && $userInfo['email'] != '') { //logged User
                            if (Mail::sendQuestionOfPayerEmail($userInfo['email'])) { //send {activate your ads}
                                $query = Post::save($getTableName, $title, $description, $userId, $postcode, $subcategory, '0', $price);
                                echo 'user logged!';
                                var_dump($query);
                                if ($query) {
                                    header("Location: /activate-ad/200");
                                }
                            }

                        } else { // Not logged
                            $thisUserExists = User::checkEmailExists($notVerifyEmail);
                            if ($thisUserExists != true) { //if NOT exists
                                $newPassword = User::generatePassword();
                                $newUserRegister = User::register($name, $notVerifyEmail, $newPassword);
                                $newUserData = User::getUserByEmail($notVerifyEmail);
                                if ($newUserRegister && MailBuilder::configureMailForActivateAccount($notVerifyEmail, $name)) {//send some mail_template {Thanks for register - your password and url ads}
                                    $query = Post::save($getTableName, $title, $description, $newUserData['id'], $postcode, $subcategory, '0', $price);
                                    echo 'user success register!';
                                    if ($query) {
                                        header("Location: /activate-account/200");
                                    }
                                }
                            } else { //user exists !
                                $userData = User::getUserByEmail($notVerifyEmail);
                                if (Mail::sendQuestionOfPayerEmail($userData['email'])) { //send {activate your ads}
                                    $query = Post::save($getTableName, $title, $description, $userData['id'], $postcode, $subcategory, '0', $price);
                                    echo 'user exists but not logged!';
                                    if ($query) {
                                        header("Location: /activate-ad/200");
                                    }
                                }
                            }
                        }
                    }
                }


            }

            /**
             * !submit only simple loading
             * @return page
             */

            $subCategoryListMenu = array();
            $subCategoryListMenu = Category::getSubcategyListByCategory($categoryName);
            require_once(ROOT . '/views/post/create.php');
            return true;
        }
    }

    public function actionCategoryList()
    {

        require_once(ROOT . '/views/post/firststep.php');
        return true;
    }
}