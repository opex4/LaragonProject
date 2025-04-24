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
        return $context;
    }
}