<?php


namespace Covalent\Object;

class ChainStatus extends DefaultObject
{
    /**
     * items field
     * @var Item\ChainStatus[]
     */
    public array $items;

    /**
     * @return Item\ChainStatus[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\ChainStatus[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}