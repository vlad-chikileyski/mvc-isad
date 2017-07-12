<?php
return array(
    'product/([0-9+])' => 'product/view/$1',
    'catalog/([a-z]+)/page-([0-9]+)'=>'catalog/index/$1/$2', //CatalogController and actionIndex
    'catalog/([a-z]+)'=>'catalog/index/$1', //CatalogController and actionIndex
    '' => 'site/index' //SiteController and actionIndex
);