<?php

class ProductController
{
    public function actionView($categoryParam, $subcategoryParam, $productId)
    {
        $getTableNameProduct = CategoryFilter::categoryCheckDoubleParam($categoryParam, $subcategoryParam);
        if ($getTableNameProduct == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        } else {
            $categoryProduct = array();
            $categoryProduct = Product::getProductById($getTableNameProduct, $productId, $categoryParam, $subcategoryParam);
            $userId = $categoryProduct[0]['user_id'];
            $user = User::getUserById($userId);
            $similarAds = Product::getSimilarAdsByCategoryAndSubcategory($getTableNameProduct, $categoryParam, $subcategoryParam);

            $email = '';
            $frequency = '';
            if (isset($_POST['createAlert'])) {
                $email = $_POST['email'];
                $frequency = $_POST['create'];
                $userEmail = User::checkName($email);
                if ($userEmail == true) {
                    $emailExist = User::checkEmailExistsAlert($email);
                    if ($emailExist !== $email) {
                        $save_changes = User::saveCreateAlert($email, $frequency);
                    } else {
                        $errors[] = 'You already create alert!';
                    }
                } else {
                    $errors[] = 'Empty user email!';
                }
            }
        }

        if ($productId == false) {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        }

        //  var_dump(PostCodeChecker::valid("OX49 5NU"));
        require_once(ROOT . '/views/product/view.php');
        return true;
    }
}
