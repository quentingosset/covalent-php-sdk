<?php


namespace Covalent\Object;

class Portfolio extends DefaultObject
{
    /**
     * items field
     * @var Item\Portfolio[]
     */
    public array $items;

    /**
     * @return Item\Portfolio[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Portfolio[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}