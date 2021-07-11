<?php


namespace Covalent\Object;

class Transfers extends DefaultObject
{
    /**
     * items field
     * @var Item\Transfer[]
     */
    public array $items;

    /**
     * @return Item\Transfer[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return Item\Transfer
     */
    public function item($index): Item\Transfer
    {
        return $this->items[$index];
    }

    /**
     * @param Item\Transfer[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}