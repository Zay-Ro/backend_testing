<?php
class ItemList{

    private array $items;

    public function __construct($items){
        $this->items = $items;
    }

    public function getItemsInJson($value){
        return json_encode($this->items);
    }
}