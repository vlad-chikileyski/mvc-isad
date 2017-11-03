<?php
return array(
    'login' => 'account/login',
    'sub/([a-z]+)' => 'category/index/$1',/*CategoryController and actionIndex*/
    '' => 'site/index' //SiteController and actionIndex
);