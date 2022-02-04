<?php
require_once 'classes/ItemList.php';

$itemList = new ItemList(['first', 'second', 'third']);
echo $itemList->getItemsInJson();
header('application/json');