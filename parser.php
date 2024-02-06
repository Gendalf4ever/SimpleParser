<?
require_once __DIR__."phpQuery.php";
$ch = curl_init('https://e-disclosure.ru/poisk-po-soobshheniyam');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$html = curl_exec($ch);
curl_close($ch);

$pq= phpQuery::newDocument($result);
$elem = $pq->find('.site-title')

?>