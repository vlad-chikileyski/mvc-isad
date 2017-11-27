<?php

/*
 * Controller for searching products functionality
 * @return searching result list
 */

class SearchController
{

    public static function actionValidate()
    {
        if (isset($_POST["search-widget"]) && isset($_POST["search-criteria"])) {
            $value = UtilsFilter::SecReqFilterSearchMainPage($_POST["search-criteria"]);
            if (isset($value) && $value != '') {
                header('Location: https://adtoday.co.uk/search/' . $value . '/page-1');
                exit;
            } else {
                header("HTTP/1.0 404 Not Found");
                require_once(ROOT . '/views/error/404.php');
            }
        } else {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        }
        return true;
    }

    public static function actionParameters($url = false, $pageparam = 1)
    {
        $search = UtilsFilter::SecReqFilterSearch($url);
        if (isset($search)) {
            $categoryProducts = array();
            $count = array();
            $categoryProducts = Product::getProductListBySearchCriteria($search, $pageparam);
            $count = Product::getProductCountBySearchCriteria($search);
            $pagination = new Pagination($count, $pageparam, Product::SHOW_BY_DEFAULT, 'page-');
            require_once(ROOT . '/views/catalog/search.php');
        } else {
            header("HTTP/1.0 404 Not Found");
            require_once(ROOT . '/views/error/404.php');
        }
        return true;
    }

}