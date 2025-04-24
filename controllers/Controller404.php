<?php
require_once "TwigBaseController.php"; // импортим TwigBaseController
class Controller404 extends TwigBaseController
{
    public $template = "404.twig";
    public $title = "Страница не найдена";

}