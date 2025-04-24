<?php
require_once "TwigBaseController.php"; // импортим TwigBaseController
class AKController extends TwigBaseController
{
    public $template = "object.twig";
    public $title = "AK";

    // Переопределяем метод getContext
    public function getContext(): array
    {
        $context = parent::getContext(); // Получаем базовый контекст (с title)
        $context['url_title'] = "AK";
        $context['nav_items'] = [
            ['text' => 'Главная', 'url' => '/', 'is_active' => false],
            ['text' => 'АК', 'url' => '/AK', 'is_active' => true],
            ['text' => 'М16', 'url' => '/M16', 'is_active' => false],
            ['text' => 'HK416', 'url' => '/HK416', 'is_active' => false],
        ];
        return $context;
    }
}