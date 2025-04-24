<?php
require_once "AKController.php";
class AKDescriptionController extends AKController
{
    public $template = "object_descriptionAK.twig";
    public function getContext(): array
    {
        $context = parent::getContext(); // Получаем базовый контекст (с title)
        $context['is_img'] = 0;
        $context['is_description'] = 1;
        return $context;
    }
}