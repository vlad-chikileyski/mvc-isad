<?php
return array(
    'product/([0-9+])' => 'product/view/$1',
    'catalog/([a-z]+)'=>'catalog/index/$1', //CatalogController and actionIndex
    '' => 'site/index' //SiteController and actionIndex
);