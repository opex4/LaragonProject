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
        return $context;
    }
}