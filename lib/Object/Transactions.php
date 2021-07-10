<?php


namespace Covalent\Object;

class Transactions extends DefaultObject
{
    /**
     * items field
     * @var Item\Transaction[]
     */
    public array $items;

    /**
     * @return Item\Transaction[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return Item\Transaction
     */
    public function item($index): Item\Transaction
    {
        return $this->items[$index];
    }

    /**
     * @param Item\Transaction[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}