<?php


namespace Covalent\Object;

class Healt extends DefaultObject
{
    /**
     * items field
     * @var Item\Healt[]
     */
    private array $items;

    /**
     * @param $index
     * @return Item\Healt
     */
    public function get($index){
        return $this->items[$index];
    }

    /**
     * @return Item\Healt[]
     */
    public function getAll(): array
    {
        return $this->getItems();
    }

    /**
     * @return Item\Healt[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Healt[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}