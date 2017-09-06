<?php
return array(
    'add'=>'post/categoryList', // PostController and actionCategoryList
    'new-ads/([a-z]+)'=>'post/index/$1', //PostController and  actionIndex
    '' => 'site/index' //SiteController and actionIndex
);