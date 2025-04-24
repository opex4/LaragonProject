<?php
require_once "AKController.php";
class AKImageController extends AKController
{
    public $template = "object_img.twig";
    public function getContext(): array
    {
        $context = parent::getContext(); // Получаем базовый контекст (с title)
        $context['is_img'] = 1;
        $context['is_description'] = 0;
        $context['img_url'] = '/images/AK.jpg';
        return $context;
    }
}