<p class="mt-2">Тут мы вам расскажем об автомате АК</p>
<a type="button" class="btn btn-outline-primary mx-2" href="/AK/imgAK">Картинка</a>
<a type="button" class="btn btn-outline-primary mx-2" href="/AK/descriptionAK">Описание</a>
<?php
$url = $_SERVER["REQUEST_URI"];
if ($url == "/AK/descriptionAK") {
    require "descriptionAK.php";
} elseif ($url == "/AK/imgAK") {
    require "imgAK.php";
}
?>
