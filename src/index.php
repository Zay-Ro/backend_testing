<?php
require_once 'classes/ItemList.php';

header('Content-Type: application/json');
$itemList = new ItemList(['first', 'second', 'third']);
echo $itemList->getItemsInJson();
