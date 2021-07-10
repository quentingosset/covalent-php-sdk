<?php


namespace Covalent\Object;

class Balance extends DefaultObject
{
    /**
     * items field
     * @var Item\Balance[]
     */
    public array $items;

    /**
     * @return Item\Balance[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Balance[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}