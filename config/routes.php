<?php

return array(
    // Товар:
    'post/([0-9]+)' => 'post/view/$1', // actionView в ProductController
    // Каталог:
    'post' => 'post/index', // actionIndex в CatalogController
    // Категория товаров:
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController

    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartContoller
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',

    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    //'' => 'site/index', // actionIndex в SiteController
    'mysite' => 'site/index', // actionIndex в SiteController

    // О магазине
    'contacts' => 'site/contacts',
    'about' => 'site/about',
);