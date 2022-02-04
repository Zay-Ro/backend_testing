<?php
class ItemList{

    private array $items;

    public function __construct($items){
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getItemsInJson(){
        return json_encode($this->items);
    }
}