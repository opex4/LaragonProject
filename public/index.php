<?php

require_once '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader);

require_once "../vendor/autoload.php";
require_once "../controllers/MainController.php";
require_once "../controllers/AKController.php";
require_once "../controllers/AKImageController.php";
require_once "../controllers/AKDescriptionController.php";
require_once "../controllers/M16Controller.php";
require_once "../controllers/M16ImageController.php";
require_once "../controllers/M16DescriptionController.php";
require_once "../controllers/Controller404.php";


$title = "";
$url_title = "";

$template = "";
$context = [];

$controller = null; // создаем переменную под контроллер
$controller = new Controller404($twig);

$url = $_SERVER["REQUEST_URI"];
if ($url == "/") {
    $controller = new MainController($twig); // создаем экземпляр контроллера для главной страницы
} elseif (preg_match("#^/AK#", $url)) {
    $controller = new AKController($twig);
    if (preg_match("#^/AK/img#", $url)) {
        $controller = new AKImageController($twig);
    } elseif (preg_match("#^/AK/description#", $url)) {
        $controller = new AKDescriptionController($twig);
    }
} elseif (preg_match("#^/M16#", $url)) {
    $controller = new M16Controller($twig);
    if (preg_match("#^/M16/img#", $url)) {
        $controller = new M16ImageController($twig);
    } elseif (preg_match("#^/M16/description#", $url)) {
        $controller = new M16DescriptionController($twig);
    }
}

// проверяем если controller не пустой, то рендерим страницу
if ($controller) {
    $controller->get();
}