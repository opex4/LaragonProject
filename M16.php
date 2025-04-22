
<p class="mt-2">Тут мы вам расскажем об автомате M16</p>
<a type="button" class="btn btn-outline-primary mx-2" href="/M16/imgM16">Картинка</a>
<a type="button" class="btn btn-outline-primary mx-2" href="/M16/descriptionM16">Описание</a>
<?php
$url = $_SERVER["REQUEST_URI"];
if ($url == "/M16/descriptionM16") {
    require "descriptionM16.php";
} elseif ($url == "/M16/imgM16") {
    require "imgM16.php";
}
?>
