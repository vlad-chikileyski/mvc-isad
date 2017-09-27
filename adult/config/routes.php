<?php
return array(
    'payment/pay/([a-z0-9]+)/([a-z0-9]+)'=>'payment/index/$1/$2', //PaymentController and actionIndex
    'add'=>'post/categoryList', // PostController and actionCategoryList
    'new-ads/([a-z]+)'=>'post/index/$1', //PostController and  actionIndex
    '' => 'site/index' //SiteController and actionIndex
);