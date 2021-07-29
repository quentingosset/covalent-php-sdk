<?php


namespace Covalent\Object;

class Ecosystem extends DefaultObject
{
    /**
     * items field
     * @var Item\Ecosystem[]
     */
    public array $items;

    /**
     * @return Item\[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Ecosystem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}