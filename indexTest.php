<?php
header('Content-type: text/html; charset=utf-8');
require 'phpQuery.php';
$url = 'https://e-disclosure.ru/poisk-po-soobshheniyam';
$file = file_get_contents($url);

/*
$pattern = '#form id = sEventSearchForm.+?</form>#s';
preg_match($pattern, $file, $matches);
*/

$doc = phpQuery::newDocument($file);
var_dump($doc);
$table = $doc->find('sEventSearchForm');
echo $table;
?>