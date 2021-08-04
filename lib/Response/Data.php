<?php


namespace Covalent\Response;

trait Data
{

    /**
     * items field
     */
    public array $items;

    /**
     * @return __items[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param __items[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}