<?php


namespace Covalent\Object;

class Block extends DefaultObject
{
    /**
     * items field
     * @var Item\Block[]
     */
    public array $items;

    /**
     * @return Item\Block[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Block[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}