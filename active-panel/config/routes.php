<?php
return array(
    'security'=>'security/index',
    'panel' => 'panel/index', //SiteController and actionIndex
    'user/profile/([0-9+])' => 'users/single/$1', //UsersController and actionSingle
    'users/all-users' => 'users/allusers', //UsersController and actionAllusers
    'seo/title' => 'seo/title', //SeoController and actionTitle
    'seo/description' => 'seo/description', //SeoController and actionDescription
    'seo/keywords' => 'seo/keywords', //SeoController and actionKeywords
    'payment/new' => 'payments/new', //SeoController and actionDescription
    'payments/all' => 'payments/allpayments', //SeoController and actionDescription
    'payment/edit/([0-9+])' => 'payments/single/$1', //SeoController and actionDescription
    '' => 'site/index' //SiteController and actionIndex
);