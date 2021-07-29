<?php


namespace Covalent\Object;

class Nft extends DefaultObject
{
    /**
     * items field
     */
    public array $items;

    /**
     * @return Item\__item[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\__item[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}