<?php
return array(
    'change-password-user' => 'help/changePasswordUser',
    'change-password/([0-9]+)/([a-z0-9]+)' => 'help/changePassword/$1/$2',
    'account/panel' => 'account/panel',
    'account/user' => 'account/user',
    'ads/([a-z-]+)/([a-z-]+)/([0-9+])' => 'product/view/$1/$2/$3',
    'contact' => 'help/contact',
    'my-ads/([a-z\-]+)' => 'edit/index/$1', //EditController and  actionIndex
    'new-ads/([a-z\-]+)' => 'post/index/$1', //PostController and  actionIndex
    'add' => 'post/categoryList',
    'terms' => 'terms/index',
    'forgot-password' => 'help/password',
    'account/ads' => 'account/ads', //AccountController and actionIndex
    'ads/([a-z]+)/([a-z]+)/([0-9+])' => 'product/view/$1/$2/$3',
    'catalog/([a-z\-]+)/([a-z\-]+)/page-([0-9]+)' => 'catalog/double/$1/$2/$3', //CatalogController and actionIndex
    'catalog/([a-z\-]+)/([a-z\-]+)' => 'catalog/double/$1/$2', //CatalogController and actionIndex
    'account/logout' => 'user/logout',
    'register' => 'account/register',
    'login' => 'account/login',
    'sub/([a-z]+)' => 'category/index/$1',/*CategoryController and actionIndex*/
    '' => 'site/index' //SiteController and actionIndex

);