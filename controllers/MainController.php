<?php
require_once "TwigBaseController.php"; // импортим TwigBaseController

class MainController extends TwigBaseController
{
    public $template = "main.twig";
    public $title = "Автоматы";

    // Переопределяем метод getContext
    public function getContext(): array
    {
        $context = parent::getContext(); // Получаем базовый контекст (с title)
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
        $context['nav_items'] = [
            ['text' => 'Главная', 'url' => '/', 'is_active' => true],
            ['text' => 'АК', 'url' => '/AK', 'is_active' => false],
            ['text' => 'М16', 'url' => '/M16', 'is_active' => false],
            ['text' => 'HK416', 'url' => '/HK416', 'is_active' => false],
        ];
        return $context;
    }
}