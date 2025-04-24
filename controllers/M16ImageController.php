<?php
require_once "M16Controller.php";
class M16ImageController extends M16Controller
{
    public $template = "object_img.twig";
    public function getContext(): array
    {
        $context = parent::getContext(); // Получаем базовый контекст (с title)
        $context['is_img'] = 1;
        $context['is_description'] = 0;
        $context['img_url'] = '/images/M16.jpg';
        return $context;
    }
}