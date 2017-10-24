<?php
return array(
    'security'=>'security/index',
    'panel' => 'panel/index', //SiteController and actionIndex
    'user/profile/([0-9+])' => 'users/single/$1', //UsersController and actionSingle
    'users/all-users' => 'users/allusers', //UsersController and actionAllusers
    'seo/title' => 'seo/title', //SeoController and actionTitle
    'seo/description' => 'seo/description', //SeoController and actionDescription
    'seo/keywords' => 'seo/keywords', //SeoController and actionKeywords
    '' => 'site/index' //SiteController and actionIndex
);