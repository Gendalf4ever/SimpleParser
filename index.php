<?php
$url = 'https://e-disclosure.ru/poisk-po-soobshheniyam';
$file = file_get_contents($url);
echo $file;
$pattern = '#form id = sEventSearchForm.+?</form>#s';
preg_match($pattern, $file, $matches);

?>
