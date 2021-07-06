<?php


namespace Covalent\Object;

class Chain extends DefaultObject
{
    /**
     * items field
     * @var Item\Chain[]
     */
    public array $items;

    /**
     * @return Item\Chain[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Chain[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}