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
        return $context;
    }
}