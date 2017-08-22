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
            $title = '';
            $subcategory = '';
            $description = '';
            $postcode = '';
            $name = '';
            $veryfyEmail = '';
            $notVerifyEmail = '';
            $phone = '';
            $result = false;
            /**
             * check userIsLogged?
             * START
             */
            $userInfo = '';
            $userId = '';
            if (User::getUserById(User::checkId()) != null) {
                $userId = User::checkId();
                $userInfo = User::getUserById($userId);
            } else {

            }
            /*
             * END
             */

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
                        $emailSecurityFilter = Post::checkEqualUserEmailAndPostData($notVerifyEmail, $userInfo['email']);
                        $query = Post::save($getTableName, $title, $description, $userId, $postcode, $name, $veryfyEmail, $phone, $subcategory);
                        if (Mail::sendQuestionOfPayerEmail($veryfyEmail)) {
                            header("Location: /activate-ad/200");
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