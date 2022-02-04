<?php
require_once 'classes/ItemList.php';
require_once 'classes/Request.php';

header('Content-Type: application/json');
$items[] = [];
for ($i=0; $i<Request::get_number(); $i++){
    $random_int = mt_rand(1000, 9999);
    $items[] = $random_int;
}
$itemList = new ItemList($items[]);
echo $itemList->getItemsInJson($itemList);
