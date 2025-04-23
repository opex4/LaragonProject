<?php

require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);

$title = "";
$url_title = "";

$template = "";
$context = [];

$url = $_SERVER["REQUEST_URI"];
if ($url == "/") {
    $template = "main.twig";
    $title = "Автоматы";

    $context['menu_items'] = [
        [
            "title" => "AK",
            "url_title" => "AK",
        ],
        [
            "title" => "M16",
            "url_title" => "M16",
        ]
    ];
} elseif ($url == "/AK" || $url == "/AK/description" || $url == "/AK/img") {
    $title = "AK";
    $url_title = "AK";
    $template = "object.twig";
    $context = ['url_title' => $url_title];

    $is_description = $url == '/AK/description';
    $is_img = $url == '/AK/img';
    $context['is_img'] = $is_img;
    $context['is_description'] = $is_description;

    if ($is_img){
        $template = "object_img.twig";
        $context['img_url'] = '/images/AK.jpg';
    } elseif ($is_description){
        $template = "object_descriptionAK.twig";
    }
} elseif ($url == "/M16" || $url == "/M16/description" || $url == "/M16/img") {
    $title = "M16";
    $url_title = "M16";
    $template = "object.twig";
    $context = ['url_title' => $url_title];

    $is_description = $url == '/M16/description';
    $is_img = $url == '/M16/img';
    $context['is_img'] = $is_img;
    $context['is_description'] = $is_description;

    if ($is_img){
        $template = "object_img.twig";
        $context['img_url'] = '/images/M16.jpg';
    } elseif ($is_description){
        $template = "object_descriptionM16.twig";
    }
}

$context['title'] = $title;
echo $twig->render($template, $context);