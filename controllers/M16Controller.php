<?php
require_once "TwigBaseController.php";
class M16Controller extends TwigBaseController
{
    public $template = "object.twig";
    public $title = "M16";

    // Переопределяем метод getContext
    public function getContext(): array
    {
        $context = parent::getContext(); // Получаем базовый контекст (с title)
        $context['url_title'] = "M16";
        $context['nav_items'] = [
            ['text' => 'Главная', 'url' => '/', 'is_active' => false],
            ['text' => 'АК', 'url' => '/AK', 'is_active' => false],
            ['text' => 'М16', 'url' => '/M16', 'is_active' => true],
            ['text' => 'HK416', 'url' => '/HK416', 'is_active' => false],
        ];
        return $context;
    }
}