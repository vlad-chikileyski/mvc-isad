<?php
return array(
    'catalog/([a-z]+)/([a-z]+)/page-([0-9]+)'=>'catalog/double/$1/$2/$3', //CatalogController and actionIndex
    'catalog/([a-z]+)/page-([0-9]+)'=>'catalog/index/$1/$2', //CatalogController and actionIndex
    'catalog/([a-z]+)/([a-z]+)'=>'catalog/double/$1/$2', //CatalogController and actionIndex
    'catalog/([a-z]+)'=>'catalog/index/$1', //CatalogController and actionIndex
    'payment/pay/([0-9]+)/([a-z0-9]+)'=>'payment/index/$1/$2', //PaymentController and actionIndex
    'add'=>'post/categoryList', // PostController and actionCategoryList
    'account/logout'=>'user/logout', //AccountController and actionLogout
    'new-ads/([a-z]+)'=>'post/index/$1', //PostController and  actionIndex
    'activate-ad/([0-9+])'=>'activate/index/$1',
    '' => 'site/index' //SiteController and actionIndex
);