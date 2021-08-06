<?php


namespace Covalent\Response\Traits;

use Covalent\Response\__items;

trait Items
{
    /**
     * items field
     */
    public array $items;

    /**
     * @param __items[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return __items[]
     */
    private function getItems(): array
    {
        return $this->items;
    }
}