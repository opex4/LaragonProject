<?php
require_once "M16Controller.php";
class M16DescriptionController extends M16Controller
{
    public $template = "object_descriptionM16.twig";
    public function getContext(): array
    {
        $context = parent::getContext(); // Получаем базовый контекст (с title)
        $context['is_img'] = 0;
        $context['is_description'] = 1;
        return $context;
    }
}