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
            $email = '';
            $phone = '';
            $userId = '666';
            $result = false;

            /**
             * Validate & save in DB
             * @return: redirect to success page
             */

            if (isset($_POST['submit'])) {

                $title = $_POST['title'];
                $subcategory = $_POST['subcategory'];
                $description = $_POST['description'];
                $postcode = $_POST['postcode'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $subcategory = lcfirst($subcategory);
                $getTableName = Category::categoryCheckDoubleParam($categoryName, $subcategory);
                if ($getTableName == false) {
                    header("HTTP/1.0 404 Not Found");
                    require_once(ROOT . '/views/error/404.php');
                    echo $getTableName;
                } else {
                    $errors = false;
                    if (!Post::checkEmail($email)) {
                        $errors[] = 'Invalid email type!';
                    }
                    if ($errors == false) {
                        $query = Post::save($getTableName, $title, $description, $userId);
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